<?php
class PhoneModel extends Model
{

	private $_columns = array('id', 'name', 'description', 'price', 'sale_off', 'picture', 'created', 'created_by', 'modified', 'modified_by', 'status', 'ordering', 'category_phone_id');
	private $_userInfo;

	public function __construct()
	{
		parent::__construct();

		$this->setTable(TBL_PHONE);
		$userObj = Session::get('user');
		$this->_userInfo = $userObj['info'];
	}

	public function countItem($arrParam, $option = null)
	{

		if ($option == null) {
			$query[] = "SELECT COUNT(`id`) AS `total`";
			$query[] = "FROM `$this->table`";
			$query[] = "WHERE `id` > 0";
			$query[] = "AND `status` = 1";
			$query[] = "AND `category_phone_id` = " . $arrParam['category_phone_id'];
		}
		if (isset($option['search'])) {
			$query[] = "SELECT COUNT(`id`) AS `total`";
			$query[] = "FROM `$this->table`";
			$query[] = "WHERE `id` > 0";
			$query[] = "AND `status` = 1";
		}

		// FILTER : KEYWORD
		if (!empty($arrParam['filter_search'])) {
			$keyword = '"%' . $arrParam['filter_search'] . '%"';
			$query[] = "AND ((`name` LIKE $keyword) OR (`description` LIKE $keyword))";
		}

		// FILTER : STATUS
		if (isset($arrParam['filter_state']) && $arrParam['filter_state'] != 'default') {
			$query[] = "AND `status` = '" . $arrParam['filter_state'] . "'";
		}

		// FILTER : SPECIAL
		if (isset($arrParam['filter_special']) && $arrParam['filter_special'] != 'default') {
			$query[] = "AND `special` = '" . $arrParam['filter_special'] . "'";
		}

		$query = implode(" ", $query);

		$result = $this->fetchRow($query);
		return $result['total'];
	}

	public function listItem($arrParam, $option = null)
	{

		if ($option['task'] == 'phone-in-cat') {
			$catID = $arrParam['category_phone_id'];
			$query[] = "SELECT `id`, `name`, `picture`, `description`, `category_phone_id`,`price` ,`sale_off`";
			$query[] = "FROM `$this->table`";
			$query[] = "WHERE `status`  = 1 AND `category_phone_id` = '$catID'";

			// FILTER : RANGE PRICE
			if (!empty($arrParam['price_first']) && !empty($arrParam['price_second'])) {
				$query[] = "AND `sale_off` >= " . $arrParam['price_first'];
				$query[] = "AND `sale_off` <= " . $arrParam['price_second'];
			}

			//$query[]	= "ORDER BY `name` ASC";
			if (isset($arrParam['filter_order'])) {
				switch ($arrParam['filter_order']) {
					case 'date':
						$query[] = "ORDER BY  `id` DESC";
						break;

					case 'price':
						$query[] = "ORDER BY  `sale_off` ASC";
						break;

					case 'price-desc':
						$query[] = "ORDER BY  `sale_off` DESC";
						break;
				}

			}



			// PAGINATION
			$pagination = $arrParam['pagination'];
			$totalItemsPerPage = $pagination['totalItemsPerPage'];
			if ($totalItemsPerPage > 0) {
				$position = ($pagination['currentPage'] - 1) * $totalItemsPerPage;
				$query[] = "LIMIT $position, $totalItemsPerPage";
			}
			$query = implode(" ", $query);

			$result = $this->fetchAll($query);
			return $result;
		}

		if ($option['task'] == 'phone-relate') {
			$phoneID = $arrParam['phone_id'];
			$catID = $arrParam['category_phone_id'];

			$query[] = "SELECT `b`.`id`, `b`.`name`, `b`.`picture`,`b`.`price`, `b`.`sale_off`,  `b`.`category_phone_id`, `c`.`name` AS `category_name`";
			$query[] = "FROM `" . TBL_PHONE . "` AS `b`, `" . TBL_CATEGORYPHONE . "` AS `c`";
			$query[] = "WHERE `b`.`status`  = 1  AND `c`.`id` = `b`.`category_phone_id` AND `b`.`id` <> '$phoneID' AND `c`.`id`  = '$catID'";
			$query[] = "ORDER BY `b`.`ordering` ASC";

			$query = implode(" ", $query);
			$result = $this->fetchAll($query);
			return $result;
		}

		if ($option['task'] == 'search') {
			if (isset($arrParam['filter_search'])) {
				$keyword = '"%' . $arrParam['filter_search'] . '%"';
				$query[] = "SELECT `p`.`id` AS `id`, `p`.`name` AS `name`, `p`.`picture` AS `picture`, `p`.`description` AS `description` ,`p`.`price` AS `price` ,`p`.`sale_off` AS `sale_off`, `p`.`category_phone_id` AS `category_phone_id`, `c`.`name` AS `category_name`";
				$query[] = "FROM `$this->table` AS `p`,  `" . TBL_CATEGORYPHONE . "` AS `c`";
				$query[] = "WHERE `p`.`category_phone_id` = `c`.`id`";
				$query[] = "AND `p`.`name` LIKE $keyword";
			}

			// PAGINATION
			$pagination = $arrParam['pagination'];
			$totalItemsPerPage = $pagination['totalItemsPerPage'];
			if ($totalItemsPerPage > 0) {
				$position = ($pagination['currentPage'] - 1) * $totalItemsPerPage;
				$query[] = "LIMIT $position, $totalItemsPerPage";
			}
			$query = implode(" ", $query);
			
			$result = $this->fetchAll($query);
			return $result;
		}
	}

	public function infoItem($arrParam, $option = null)
	{
		if ($option['task'] == 'get-menu-name') {

			$query = "SELECT `m`.`name` ";
			$query .= " FROM `" . TBL_MENU . "` AS `m`";
			$query .= " WHERE `m`.`id` = (";

			$query .= "SELECT `c`.`menu_id` ";
			$query .= " FROM `" . TBL_CATEGORYPHONE . "` AS `c`, `" . TBL_PHONE . "` AS `p`";
			$query .= " WHERE `c`.`id` = `p`.`category_phone_id`";
			$query .= " AND `p`.`id` = '" . $arrParam['phone-id'] . "')";
			echo '<pre style="color:red">';
			print_r($query);
			echo '</pre>';
			$result = $this->fetchRow($query);
			return $result['name'];
		}



		if ($option['task'] == 'get-cat-name') {
			$query = "SELECT `name` FROM `" . TBL_CATEGORYPHONE . "` WHERE `id` = '" . $arrParam['category_phone_id'] . "'";
			$result = $this->fetchRow($query);
			return $result['name'];
		}

	

		if ($option['task'] == 'phone-info') {
			$query = "SELECT `b`.`id`, `b`.`name`, `c`.`name` AS `category_name`, `b`.`price`, `b`.`sale_off`, `b`.`picture`, `b`.`description`, `b`.`category_phone_id` FROM `" . TBL_PHONE . "` AS `b`, `" . TBL_CATEGORYPHONE . "` AS `c` WHERE `b`.`id` = '" . $arrParam['phone_id'] . "' AND `c`.`id` = `b`.`category_phone_id`";

			$result = $this->fetchRow($query);

			return $result;
		}
	}
}