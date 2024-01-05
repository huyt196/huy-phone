<?php
class CartModel extends Model
{

	private $_columns = array('id', 'name', 'description', 'price', 'special', 'sale_off', 'picture', 'created', 'created_by', 'modified', 'modified_by', 'status', 'ordering', 'category_phone_id');
	private $_userInfo;

	public function __construct()
	{
		parent::__construct();

		$this->setTable(TBL_PHONE);
		$userObj = Session::get('user');
		$this->_userInfo = $userObj['info'];
	}



	public function infoItem($arrParam, $option = null)
	{


		$query = "SELECT * FROM `$this->table`";
		$query .= " WHERE `id` = '" . $arrParam['id'] . "'";
		$result = $this->fetchRow($query);
		return $result;
	
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