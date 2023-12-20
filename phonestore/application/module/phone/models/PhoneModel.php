<?php
class PhoneModel extends Model{
	
	private $_columns = array('id', 'name', 'description', 'price', 'sale_off', 'picture','created', 'created_by', 'modified', 'modified_by', 'status', 'ordering', 'category_id');
	private $_userInfo;
	
	public function __construct(){
		parent::__construct();
			
		$this->setTable(TBL_PHONE);
		$userObj 			= Session::get('user');
		$this->_userInfo 	= $userObj['info'];
	}
	
	public function listItem($arrParam, $option = null){
		if($option['task'] == 'phone-in-cat'){
			$catID		= $arrParam['category_phone_id'];
			$query[]	= "SELECT `id`, `name`, `picture`, `description`, `category_phone_id`,`price`";
			$query[]	= "FROM `$this->table`";
			$query[]	= "WHERE `status`  = 1 AND `category_phone_id` = '$catID'";
			$query[]	= "ORDER BY `name` ASC";
	
			$query		= implode(" ", $query);
			$result		= $this->fetchAll($query);
			return $result;
		}
		
		if($option['task'] == 'phone-relate'){
			$phoneID		= $arrParam['phone_id'];
			$catID		= $arrParam['category_phone_id'];
			
			$query[]	= "SELECT `b`.`id`, `b`.`name`, `b`.`picture`,`b`.`price`, `b`.`category_phone_id`, `c`.`name` AS `category_name`";
			$query[]	= "FROM `".TBL_PHONE."` AS `b`, `".TBL_CATEGORYPHONE."` AS `c`";
			$query[]	= "WHERE `b`.`status`  = 1  AND `c`.`id` = `b`.`category_phone_id` AND `b`.`id` <> '$phoneID' AND `c`.`id`  = '$catID'";
			$query[]	= "ORDER BY `b`.`ordering` ASC";
		
			$query		= implode(" ", $query);
			$result		= $this->fetchAll($query);
			return $result;
		}
	}
	
	public function infoItem($arrParam, $option = null){
		if($option['task'] == 'get-cat-name'){
			$query	= "SELECT `name` FROM `".TBL_CATEGORYPHONE."` WHERE `id` = '" . $arrParam['category_phone_id'] . "'";
			$result	= $this->fetchRow($query);
			return $result['name'];
		}
		
		if($option['task'] == 'phone-info'){
			
			$query	= "SELECT `b`.`id`, `b`.`name`, `c`.`name` AS `category_name`, `b`.`price`, `b`.`sale_off`, `b`.`picture`, `b`.`description`, `b`.`category_phone_id` FROM `".TBL_PHONE."` AS `b`, `".TBL_CATEGORYPHONE."` AS `c` WHERE `b`.`id` = '" . $arrParam['phone_id'] . "' AND `c`.`id` = `b`.`category_phone_id`";
			
			$result	= $this->fetchRow($query);
		
			return $result;
		}
	}
}