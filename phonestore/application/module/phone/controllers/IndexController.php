<?php
class IndexController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('phone/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	
	public function noticeAction(){
		$this->_view->render('index/notice');
	}
	
	public function indexAction(){
		
		$this->_view->_title	= 'Phone Store';
		$this->_view->menu_active		= 'home';
		$this->_view->specialPhone	= $this->_model->listItem($this->_arrParam, array('task' => 'phone-special'));
		$this->_view->newPhone		= $this->_model->listItem($this->_arrParam, array('task' => 'phone-new'));
		$this->_view->salesPhone		= $this->_model->listItem($this->_arrParam, array('task' => 'phone-sales'));
		$this->_view->categoryPhone		= $this->_model->listItem($this->_arrParam, array('task' => 'category-list'));
		$this->_view->menus = $this->_model->listItem($this->_arrParam, array('task' => 'category-phone', 'table' => 'menu'));
	
		$arrCategories = $this->_model->listItem($this->_arrParam, array('task' => 'category-phone', 'table' => 'categoryphone'));
		$arrayMenus = [];
		foreach ($this->_view->menus as $keyMenu => $valueMenu) {
		
			$arrayMenus[$valueMenu['id']] = ['id' => $valueMenu['id'], 'name' => $valueMenu['name']];
		}
		foreach ($arrCategories as $keyCategories => $valueCategories) {
			if ($valueCategories['menu_id'] == $arrayMenus[$valueCategories['menu_id']]['id']) {
			
			$str =	$arrayMenus[$valueCategories['menu_id']]['categoryphone'][$valueCategories['id']] = ['id' => $valueCategories['id'], 'name' => $valueCategories['name']];
		}
		}
		$this->_view->menus = $arrayMenus;
		$this->_view->render('index/index', true, ['slider' => true, 'banner' => true, 'info' => true]);
	}

	public function registerAction(){
		$userInfo	= Session::get('user');
		if($userInfo['login'] == true && $userInfo['time'] + TIME_LOGIN >= time()){
			URL::redirect('phone', 'user', 'index');
		}
		
		if(isset($this->_arrParam['form']['submit'])){
			URL::checkRefreshPage($this->_arrParam['form']['token'], 'phone', 'user', 'register');
				
			$queryUserName	= "SELECT `id` FROM `".TBL_USER."` WHERE `username` = '".$this->_arrParam['form']['username']."'";
			$queryEmail		= "SELECT `id` FROM `".TBL_USER."` WHERE `email` = '".$this->_arrParam['form']['email']."'";
				
			$validate = new Validate($this->_arrParam['form']);
			$validate->addRule('username', 'string-notExistRecord', array('database' => $this->_model, 'query' => $queryUserName, 'min' => 3, 'max' => 25))
					 ->addRule('email', 'email-notExistRecord', array('database' => $this->_model, 'query' => $queryEmail))
					 ->addRule('password', 'password', array('action' => 'add'));
				
			$validate->run();
				
			$this->_arrParam['form'] = $validate->getResult();
			if($validate->isValid() == false){
				$this->_view->errors = $validate->showErrorsPublic();
			}else{
				$id	= $this->_model->saveItem($this->_arrParam, array('task' => 'user-register'));
				URL::redirect('phone', 'index', 'notice', array('type' => 'register-success'));
			}
	
		}
		$this->_view->render('index/register');
	}

	public function logoutAction(){
		Session::delete('user');
		URL::redirect('phone', 'index', 'index', null, 'index.html');
	}

	public function loginAction(){
		$userInfo	= Session::get('user');
		if($userInfo['login'] == true && $userInfo['time'] + TIME_LOGIN >= time()){
			URL::redirect('phone', 'user', 'index', null, 'my-account.html');
		}
	
		$this->_view->_title 		= 'Login';
	
		if($this->_arrParam['form']['token'] > 0){
			$validate	= new Validate($this->_arrParam['form']);
			$email		= $this->_arrParam['form']['email'];
			$password	= md5($this->_arrParam['form']['password']);
			$query		= "SELECT `id` FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
			$validate->addRule('email', 'existRecord', array('database' => $this->_model, 'query' => $query));
			$validate->run();
				
			if($validate->isValid()==true){
				$infoUser		= $this->_model->infoItem($this->_arrParam);
				$arraySession	= array(
						'login'		=> true,
						'info'		=> $infoUser,
						'time'		=> time(),
						'group_acp'	=> $infoUser['group_acp']
				);
				Session::set('user', $arraySession);
				URL::redirect('phone', 'user', 'index', null, 'my-account.html');
			}else{
				$this->_view->errors	= $validate->showErrorsPublic();
			}
		}
	
		$this->_view->render('index/login');
	}
}