<?php
class ArticleController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('phone/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	// ACTION: LIST BOOK
	public function listAction(){
		$this->_view->_title 		= 'Blog';
		$this->_view->categoryName 	= $this->_model->infoItem($this->_arrParam, array('task' => 'get-cat-name'));
		$this->_view->Items	 		= $this->_model->listItem($this->_arrParam, array('task' => 'blog-in-cat'));
		$this->_view->name_page = "Blog";
		$this->_view->menu_active = "blog";
		$this->_view->render('article/list', true, ['slider' => false, 'banner' => false, 'info' => false, 'breadcum' => true]);
	}
	
// ACTION: DETAIL BLOG
public function detailAction(){
	$this->_view->_title 		= 'Info Blog';

	$this->_view->menu_active = "blog";
	 $this->_view->blogInfo 		= $this->_model->infoItem($this->_arrParam, array('task' => 'blog-info'));
	 $this->_view->name_page = $this->_view->blogInfo['name'];
	 $this->_view->category_name = $this->_view->blogInfo['category_name'];
	 $this->_view->category_id = $this->_view->blogInfo['category_phone_id'];
	 $this->_view->blogRelate	= $this->_model->listItem($this->_arrParam, array('task' => 'blog-relate'));
	$this->_view->render('article/detail', true, ['breadcum' => true]);
}

	// ACTION: RELATE BOOK
	public function relateAction(){
		$this->_view->bookRelate	= $this->_model->listItem($this->_arrParam, array('task' => 'books-relate'));
		$this->_view->render('book/relate', false);
	}
}