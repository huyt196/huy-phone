<?php
class AboutController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('phone/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	// ACTION: LIST BOOK
	public function listAction(){
		$this->_view->_title 		= 'About';
		$this->_view->categoryName 	= $this->_model->infoItem($this->_arrParam, array('task' => 'get-cat-name'));
		$this->_view->Items	 		= $this->_model->listItem($this->_arrParam, array('task' => 'books-in-cat'));
		$this->_view->name_page = "Giới thiệu";
		$this->_view->menu_active = "about";
		$this->_view->render('about/index', true, ['slider' => false, 'banner' => false, 'info' => true, 'breadcum' => true]);
	}
	
	// ACTION: DETAIL BOOK
	public function detailAction(){
		$this->_view->_title 		= 'Info book';
 		$this->_view->bookInfo 		= $this->_model->infoItem($this->_arrParam, array('task' => 'book-info'));
		$this->_view->render('book/detail');
	}

	// ACTION: RELATE BOOK
	public function relateAction(){
		$this->_view->bookRelate	= $this->_model->listItem($this->_arrParam, array('task' => 'books-relate'));
		$this->_view->render('book/relate', false);
	}
}