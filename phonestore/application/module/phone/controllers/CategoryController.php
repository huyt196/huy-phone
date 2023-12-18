<?php
class CategoryController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	// ACTION: LIST CATGORIES  
	public function indexAction(){
		require_once LIBRARY_EXT_PATH . 'XML.php';
		$this->_view->_title 		= 'Category List';
		$this->_view->Items 		= $this->_model->listItem($this->_arrParam);
		$this->_view->render('category/index');
	}
	
}