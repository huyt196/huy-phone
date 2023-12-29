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
	
		$this->_view->categoryName 	= $this->_model->infoItem($this->_arrParam, array('task' => 'get-cat-name'));
	
		
		$totalItems = $this->_model->countItem($this->_arrParam, null);
	
			$configPagination = array('totalItemsPerPage' => 9, 'pageRange' => 3);
		
		$this->setPagination($configPagination);
		$this->_view->pagination = new Pagination($totalItems, $this->_pagination);
		$this->_view->Items	 		= $this->_model->listItem($this->_arrParam, array('task' => 'phone-in-cat'));
		$this->_view->render('phone/list', true, ['breadcum' => true]);
	}
	
	// ACTION: DETAIL BOOK
	public function detailAction(){
		$this->_view->_title 		= 'Info phone';
 		$this->_view->phoneInfo 		= $this->_model->infoItem($this->_arrParam, array('task' => 'phone-info'));
		 $this->_view->phoneRelate	= $this->_model->listItem($this->_arrParam, array('task' => 'phone-relate'));
		$this->_view->render('phone/detail');
	}

	// ACTION: RELATE BOOK
	public function relateAction(){
		$this->_view->phoneRelate	= $this->_model->listItem($this->_arrParam, array('task' => 'phone-relate'));
		$this->_view->render('phone/detail', false);
	}
}