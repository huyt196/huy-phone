<?php
class CartModel extends Model
{

	private $_columns = array('id', 'name', 'description', 'price', 'sale_off', 'picture', 'created', 'created_by', 'modified', 'modified_by', 'status', 'ordering', 'category_id');
	private $_userInfo;

	public function __construct()
	{
		parent::__construct();

		$this->setTable(TBL_BOOK);
		$userObj = Session::get('user');
		$this->_userInfo = $userObj['info'];
	}

	public function listItem($arrParam, $option = null)
	{
		if ($option['task'] == 'books-in-cat') {
			$catID = $arrParam['category_id'];
			$query[] = "SELECT `id`, `name`, `picture`, `description`, `category_id`";
			$query[] = "FROM `$this->table`";
			$query[] = "WHERE `status`  = 1 AND `category_id` = '$catID'";
			$query[] = "ORDER BY `ordering` ASC";

			$query = implode(" ", $query);
			$result = $this->fetchAll($query);
			return $result;
		}

	}

	public function infoItem($arrParam, $option = null)
	{
		if ($option['task'] == 'get-cat-name') {
			$query = "SELECT `name` FROM `" . TBL_CATEGORIES . "` WHERE `id` = '" . $arrParam['category_id'] . "'";
			$result = $this->fetchRow($query);
			return $result['name'];
		}

		if ($option['task'] == 'product-info') {
			$query[] = "SELECT `p`.`id`, `p`.`name`, `c`.`name` AS `category_name`, `p`.`price`, `p`.`sale_off`, `p`.`picture`, `p`.`description`, `p`.`category_id`";
			$query[] = "FROM `" . TBL_PRODUCT . "` AS `p`, `" . TBL_CATEGORIES . "` AS `c` WHERE `p`.`id` = '" . $arrParam['product-id'] . "' AND `c`.`id` = `p`.`category_id`";
			$query = implode(" ", $query);
			$result = $this->fetchRow($query);
			return $result;
		}
	}



	public function insertOrder($arrParam, $option = null)
	{
		//chèn thông tin order vào bảng orders
		$orderDate = date('Y-m-d H:i:s');
		$customerID = strtoupper(HelperFrontend::randomString(10));
		$totalMoney = 0;
		$fullname = $arrParam['fullname'];
		$email = $arrParam['email'];
		$phoneNumber = $arrParam['phone_number'];
		$address = $arrParam['address'];
		$note = $arrParam['note'];
		foreach ($arrParam['cart'] as $item) {
			$totalMoney += $item['sale_off'] * $item['num'];
		}
		$data = ['CustomerID' => $customerID, 'Fullname' => $fullname, 'Email' => $email, 'PhoneNumber' => $phoneNumber, 'Address' => $address, 'Note' => $note, 'OrderDate' => $orderDate, 'TotalAmount' => $totalMoney, 'Status' => 1];
		$this->setTable(TBL_ORDER);
		$this->insert($data);

		//chèn thông tin chi tiết đơn hàng vào bảng order_detail
		$query = "SELECT * FROM `orders` WHERE `OrderDate` = '$orderDate'";
		$orderItem = $this->fetchRow($query);
		$orderId = $orderItem['OrderID'];
		$this->setTable(TBL_ORDER_DETAIL);
		foreach($arrParam['cart'] as $item){
			$product_id = $item['id'];
			$price = $item['sale_off'];
			$num = $item['num'];
			$total_money = $price * $num;
			$data = ['OrderID' => $orderId, 'ProductID' => $product_id , 'Price' => $price, 'Quantity' => $num, 'Subtotal' => $total_money];
			$this->insert($data);
		}
		unset($_SESSION['cart']);
		return $customerID;
	}
}