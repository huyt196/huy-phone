<?php
class PhoneController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('phone/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	// ACTION: LIST BOOK
	public function listAction(){

		$this->_view->_title 		= 'List Phone';
		$this->_view->_jsFile 		= 'custom.js';
		$this->_view->menu_active		= 'list';
		
		$this->_view->categoryName 	= $this->_model->infoItem($this->_arrParam, array('task' => 'get-cat-name'));
		
		$this->_view->name_page = $this->_model->infoItem($this->_arrParam, array('task' => 'get-cat-name'));
		$totalItems = $this->_model->countItem($this->_arrParam, null);
		if (isset($this->_arrParam['filter_showing']) && $this->_arrParam['filter_showing'] != 'default') {
			$configPagination = array('totalItemsPerPage' => $this->_arrParam['filter_showing'], 'pageRange' => 3);
		} else {
			$configPagination = array('totalItemsPerPage' => 9, 'pageRange' => 3);
		}
			
		
		$this->setPagination($configPagination);
		$this->_view->pagination = new Pagination($totalItems, $this->_pagination);
		$this->_view->Items	 		= $this->_model->listItem($this->_arrParam, array('task' => 'phone-in-cat'));
		$this->_view->render('phone/list', true, ['breadcum' => true]);
	}
	
	// ACTION: DETAIL BOOK
	public function detailAction(){
		$this->_view->_title 		= 'Info phone';

		$this->_view->menu_active = $this->_view->phoneInfo['menu-name'];
 		$this->_view->phoneInfo 		= $this->_model->infoItem($this->_arrParam, array('task' => 'phone-info'));
		 $this->_view->name_page = $this->_view->phoneInfo['name'];
		 $this->_view->category_name = $this->_view->phoneInfo['category_name'];
		 $this->_view->category_id = $this->_view->phoneInfo['category_phone_id'];
		 $this->_view->phoneRelate	= $this->_model->listItem($this->_arrParam, array('task' => 'phone-relate'));
		$this->_view->render('phone/detail', true, ['breadcum' => true]);
	}
	
	// ACTION: QUICK VIEW PRODUCT
	public function quickViewAction()
	{
		$this->_view->phoneInfo = $this->_model->infoItem($this->_arrParam, array('task' => 'phone-info'));
		$this->_view->render('phone/shop-quick-view', false);
	}

	// ACTION: RELATE BOOK
	public function relateAction(){
		$this->_view->phoneRelate	= $this->_model->listItem($this->_arrParam, array('task' => 'phone-relate'));
		$this->_view->render('phone/detail', false);
	}

	// ACTION: SEARCH PHONE
	public function searchAction(){
		//$this->_view->keySearch = $this->_arrParam['key_search_phone'];
		// $this->_view->categoryName 	= $this->_model->infoItem($this->_arrParam, array('task' => 'get-cat-name'));
		$totalItems = $this->_model->countItem($this->_arrParam, ['search' => true]);
		$configPagination = array('totalItemsPerPage' => 9, 'pageRange' => 3);
		
		
		$this->setPagination($configPagination);
		$this->_view->pagination = new Pagination($totalItems, $this->_pagination);
		$this->_view->Items = $this->_model->listItem($this->_arrParam, array('task' => 'search'));
		$this->_view->name_page = "Tìm kiếm sản phẩm";
		$this->_view->render('phone/search', true, ['breadcum' => true]);
	}
}