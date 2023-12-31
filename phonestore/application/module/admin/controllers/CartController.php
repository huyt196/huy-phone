<?php
class CartController extends Controller
{

	public function __construct($arrParams)
	{
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('shop/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}

	// ACTION: DETAIL CART
	public function detailAction()
	{
		$this->_view->_title = 'Giỏ hàng';
		$this->_view->name_page = "Giỏ hàng";
		$this->_view->appendJSFix(['js/cart.js']);
		$this->_view->render('cart/detail', true, ['slider' => false, 'banner' => false, 'breadcrumb' => true]);
	}

	// ACTION: ADD PRODUCT
	public function addAction()
	{
		$id = $_POST['id'];
		$num = $_POST['num'];
		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = array();
		}
		$isFind = false;
		for ($i = 0; $i < count($_SESSION['cart']); $i++) {
			//nếu sản phẩm đã có trong giỏ hàng thì thêm số lượng
			if ($_SESSION['cart'][$i]['id'] == $id) {
				$_SESSION['cart'][$i]['num'] += $num;
				$isFind = true;
				break;
			}
		}

		//nếu sản phẩm chưa có trong giỏ hàng thì thêm mới hoàn toàn
		if (!$isFind) {
			$product = $this->_model->infoItem(['product-id' => $id], ['task' => 'product-info']);
			$product['num'] = $num;
			$_SESSION['cart'][] = $product;
		}
	}

	//ACTION: UPDATE CART
	public function updateAction()
	{
		$id = $_POST['id'];
		$num = $_POST['num'];

		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = array();
		}

		for ($i = 0; $i < count($_SESSION['cart']); $i++) {
			//nếu sản phẩm đã có trong giỏ hàng thì update số lượng
			if ($_SESSION['cart'][$i]['id'] == $id) {
				$_SESSION['cart'][$i]['num'] = $num;
				if ($num <= 0) {
					//xóa phần tử thứ i khỏi giỏ hàng
					array_splice($_SESSION['cart'], $i, 1);
				}
				break;
			}
		}
	}

	// ACTION: CHECHOUT
	public function checkoutAction()
	{
		$this->_view->_title = 'Thanh toán';
		$this->_view->name_page = "Thanh toán";
		$this->_view->_jsFile[] = 'cart.js';

		if((!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0)){
			header('location: home.html');
			exit();
	  	}
		else if(isset($_POST['btn-submit-complete'])){
			$validate = new Validate($_POST);
			$validate->addRule('fullname', 'string', array('min' => 1, 'max' => 255))
					->addRule('email', 'email')
					->addRule('phone_number', 'phone')
					->addRule('address', 'string', array('min' => 1, 'max' => 2550));
			$validate->run();
			$customerInfo = $validate->getResult();
			if($validate->isValid() == false){
				$this->_view->errorCheckout = $validate->showErrors();
				$this->_view->customerInfo = $customerInfo;
				$this->_view->render('cart/checkout', true, ['slider' => false, 'banner' => false, 'breadcrumb' => true]);
				return;
			}else{
				$orderCode = $this->_model->insertOrder(array_merge($customerInfo, ['cart' => $_SESSION['cart']]));
				$this->_view->orderCode = $orderCode;
				$this->_view->_title = 'Đặt hàng thành công';
				$this->_view->name_page = "Đặt hàng thành công";
				$this->_view->render('cart/complete-checkout', true, ['slider' => false, 'banner' => false, 'breadcrumb' => true]);
				return;
			}
		}
		else if(!isset($_POST['btn-submit-complete'])){
			$this->_view->errorCheckout = '';
			$this->_view->render('cart/checkout', true, ['slider' => false, 'banner' => false, 'breadcrumb' => true]);
			return;
		}
		
	}

	
}