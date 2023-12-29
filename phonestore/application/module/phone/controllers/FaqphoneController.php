<?php
class FaqphoneController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('phone/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	// ACTION: LIST BOOK
	public function listAction(){
		$this->_view->_title 		= 'FAQ';
		$this->_view->Items	 		= $this->_model->listItem($this->_arrParam, array('task' => 'faq-phone'));
		$this->_view->name_page = "Câu Hỏi Thường gặp ?";
		$this->_view->menu_active = "faqphone";
		$this->_view->render('faqphone/index', true, ['slider' => false, 'banner' => false, 'info' => true, 'breadcum' => true]);
	}
	
	


}