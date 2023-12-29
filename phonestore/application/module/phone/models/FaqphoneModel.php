<?php
class FaqphoneModel extends Model{
	
	private $_columns = array('id', 'name', 'description', 'price', 'sale_off', 'picture','created', 'created_by', 'modified', 'modified_by', 'status', 'ordering', 'category_id');
	private $_userInfo;
	
	public function __construct(){
		parent::__construct();
			
		$this->setTable(TBL_FAQ);
		$userObj 			= Session::get('user');
		$this->_userInfo 	= $userObj['info'];
	}
	
	public function listItem($arrParam, $option = null){
		if($option['task'] == 'faq-phone'){
	
			$query[]	= "SELECT `id`, `question`, `answer`";
			$query[]	= "FROM `$this->table`";
			$query[]	= "WHERE `status`  = 1";
			$query[]	= "ORDER BY `question` ASC";
	
			$query		= implode(" ", $query);
			$result		= $this->fetchAll($query);
			return $result;
		}
		
		
	}
	

}