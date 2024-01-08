<?php
class ArticleModel extends Model{
	
	private $_columns = array('id', 'name', 'description', 'picture','created', 'created_by', 'modified', 'modified_by', 'status', 'ordering');
	private $_userInfo;
	
	public function __construct(){
		parent::__construct();
			
		$this->setTable(TBL_BLOG);
		$userObj 			= Session::get('user');
		$this->_userInfo 	= $userObj['info'];
	}
	
	public function listItem($arrParam, $option = null){

		if ($option['task'] == 'blog-relate') {
			$blogID = $arrParam['blog_id'];
			$catID = $arrParam['category_phone_id'];

			$query[] = "SELECT `b`.`id`, `b`.`name`,`b`.`created`, `b`.`picture`, `b`.`category_phone_id`, `c`.`name` AS `category_name`";
			$query[] = "FROM `" . TBL_BLOG . "` AS `b`, `" . TBL_CATEGORYPHONE . "` AS `c`";
			$query[] = "WHERE `b`.`status`  = 1  AND `c`.`id` = `b`.`category_phone_id` AND `b`.`id` <> '$blogID' AND `c`.`id`  = '$catID'";
			$query[] = "ORDER BY `b`.`ordering` ASC LIMIT 2";

			$query = implode(" ", $query);
			$result = $this->fetchAll($query);
			return $result;
		}



		if($option['task'] == 'blog-in-cat'){
		
			$query[]	= "SELECT `id`, `name`, `picture`, `description`,`created`,`category_phone_id`";
			$query[]	= "FROM `$this->table`";
			$query[]	= "WHERE `status`  = 1 ";
			$query[]	= "ORDER BY `name` ASC";
	
			$query		= implode(" ", $query);
			$result		= $this->fetchAll($query);
			return $result;
		}
		
		if($option['task'] == 'books-relate'){
			$bookID		= $arrParam['book_id'];
			$catID		= $arrParam['category_id'];
			
			$query[]	= "SELECT `b`.`id`, `b`.`name`, `b`.`picture`, `b`.`category_id`, `c`.`name` AS `category_name`";
			$query[]	= "FROM `".TBL_BOOK."` AS `b`, `".TBL_CATEGORY."` AS `c`";
			$query[]	= "WHERE `b`.`status`  = 1  AND `c`.`id` = `b`.`category_id` AND `b`.`id` <> '$bookID' AND `c`.`id`  = '$catID'";
			$query[]	= "ORDER BY `b`.`ordering` ASC";
		
			$query		= implode(" ", $query);
			$result		= $this->fetchAll($query);
			return $result;
		}
	}
	
	public function infoItem($arrParam, $option = null)
	{
		if ($option['task'] == 'get-cat-name') {
			$query = "SELECT `name` FROM `" . TBL_CATEGORYPHONE . "` WHERE `id` = '" . $arrParam['category_phone_id'] . "'";
			$result = $this->fetchRow($query);
			return $result['name'];
		}

		if ($option['task'] == 'blog-info') {
			$query = "SELECT `b`.`id`, `b`.`name`, `b`.`created`,`c`.`name` AS `category_name`,  `b`.`picture`, `b`.`description`, `b`.`category_phone_id` FROM `" . TBL_BLOG . "` AS `b`, `" . TBL_CATEGORYPHONE . "` AS `c` WHERE `b`.`id` = '" . $arrParam['blog_id'] . "' AND `c`.`id` = `b`.`category_phone_id`";
		
			$result = $this->fetchRow($query);
			
			return $result;
		}
	}
}