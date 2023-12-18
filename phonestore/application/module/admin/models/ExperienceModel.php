<?php
class ExperienceModel extends Model{
	
	private $_columns = array('id', 'name', 'work', 'star', 'avatar', 'content','created', 'created_by', 'modified', 'modified_by', 'status', 'ordering');
	private $_userInfo;
	
	public function __construct(){
		parent::__construct();
		$this->setTable(TBL_EXPERIENCE);
		
		$userObj 			= Session::get('user');
		$this->_userInfo 	= $userObj['info'];
	}
	
	public function countItem($arrParam, $option = null){
	
		$query[]	= "SELECT COUNT(`id`) AS `total`";
		$query[]	= "FROM `$this->table`";
		$query[]	= "WHERE `id` > 0";
		
		// FILTER : KEYWORD
		if(!empty($arrParam['filter_search'])){
			$keyword	= '"%' . $arrParam['filter_search'] . '%"';
			$query[]	= "AND (`name` LIKE $keyword)";
		}
	
		// FILTER : STATUS
		if(isset($arrParam['filter_state']) && $arrParam['filter_state'] != 'default'){
			$query[]	= "AND `status` = '" . $arrParam['filter_state']. "'";
		}
		
		// FILTER : SPECIAL
		if(isset($arrParam['filter_special']) && $arrParam['filter_special'] != 'default'){
			$query[]	= "AND `special` = '" . $arrParam['filter_special'] . "'";
		}
		
		// FILTER : CATEGORY ID
		if(isset($arrParam['filter_category_id']) && $arrParam['filter_category_id'] != 'default'){
			$query[]	= "AND `category_id` = '" . $arrParam['filter_category_id'] . "'";
		}
	
		$query		= implode(" ", $query);
		$result		= $this->fetchRow($query);
		return $result['total'];
	}
	
	public function itemInSelectbox($arrParam, $option = null){
		if($option == null){
			$query 	= "SELECT `id`, `name` FROM `" . TBL_CATEGORY . "`";
			$result = $this->fetchPairs($query);
			$result['default'] = "- Select Category -";
			ksort($result);
		}
		return $result;
	}
	
	public function listItem($arrParam, $option = null){
		$query[]	= "SELECT `e`.`id`, `e`.`name`, `e`.`work`, `e`.`star`, `e`.`avatar`, `e`.`content`, `e`.`status`, `e`.`ordering`, `e`.`created`, `e`.`created_by`, `e`.`modified`, `e`.`modified_by`";
		$query[]	= "FROM `$this->table` AS `e`";
		$query[]	= "WHERE `e`.`id` > 0";
		
		// FILTER : KEYWORD
		if(!empty($arrParam['filter_search'])){
			$keyword	= '"%' . $arrParam['filter_search'] . '%"';
			$query[]	= "AND (`e`.`name` LIKE $keyword)";
		}
		
		// FILTER : STATUS
		if(isset($arrParam['filter_state']) && $arrParam['filter_state'] != 'default'){
			$query[]	= "AND `e`.`status` = '" . $arrParam['filter_state'] . "'";
		}
		
		// FILTER : SPECIAL
		if(isset($arrParam['filter_special']) && $arrParam['filter_special'] != 'default'){
			$query[]	= "AND `e`.`special` = '" . $arrParam['filter_special'] . "'";
		}
		
		// FILTER : CATEGORY ID
		if(isset($arrParam['filter_category_id']) && $arrParam['filter_category_id'] != 'default'){
			$query[]	= "AND `e`.`category_id` = '" . $arrParam['filter_category_id'] . "'";
		}
		
		// SORT
		if(!empty($arrParam['filter_column']) && !empty($arrParam['filter_column_dir'])){
			$column		= $arrParam['filter_column'];
			$columnDir	= $arrParam['filter_column_dir'];
			$query[]	= "ORDER BY `e`.`$column` $columnDir";
		}else{
			$query[]	= "ORDER BY `e`.`id` DESC";
		}  
		
		// PAGINATION
		$pagination			= $arrParam['pagination'];
		$totalItemsPerPage	= $pagination['totalItemsPerPage'];
		if($totalItemsPerPage > 0){
			$position	= ($pagination['currentPage']-1)*$totalItemsPerPage;
			$query[]	= "LIMIT $position, $totalItemsPerPage";
		}

		$query		= implode(" ", $query);
		$result		= $this->fetchAll($query);
		return $result;
	}
	
	public function changeStatus($arrParam, $option = null){
		if($option['task'] == 'change-ajax-status'){
			$status 		= ($arrParam['status'] == 0) ? 1 : 0;
			$modified_by	= $this->_userInfo['username'];
			$modified		= date('Y-m-d', time());
			$id				= $arrParam['id'];
			$query	= "UPDATE `$this->table` SET `status` = $status, `modified` = '$modified', `modified_by` = '$modified_by'  WHERE `id` = '" . $id . "'";
			$this->query($query);
			
			$result = array(
								'id'		=> $id, 
								'status'	=> $status, 
								'link'		=> URL::createLink('admin', 'experience', 'ajaxStatus', array('id' => $id, 'status' => $status))
						); 
			return $result;
		}
		
		if($option['task'] == 'change-ajax-special'){
			$special 		= ($arrParam['special'] == 0) ? 1 : 0;
			$modified_by	= $this->_userInfo['username'];
			$modified		= date('Y-m-d', time());
			$id				= $arrParam['id'];
			$query	= "UPDATE `$this->table` SET `special` = $special, `modified` = '$modified', `modified_by` = '$modified_by'  WHERE `id` = '" . $id . "'";
			$this->query($query);
				
			$result = array(
					'id'		=> $id,
					'special'	=> $special,
					'link'		=> URL::createLink('admin', 'experience', 'ajaxSpecial', array('id' => $id, 'special' => $special))
			);
			return $result;
		}
		
		if($option['task'] == 'change-status'){
			$status 		= $arrParam['type'];
			$modified_by	= $this->_userInfo['username'];
			$modified		= date('Y-m-d', time());
			if(!empty($arrParam['cid'])){
				$ids		= $this->createWhereDeleteSQL($arrParam['cid']);
				$query		= "UPDATE `$this->table` SET `status` = $status, `modified` = '$modified', `modified_by` = '$modified_by'  WHERE `id` IN ($ids)";
				$this->query($query);
				Session::set('message', array('class' => 'success', 'content' => 'Có ' . $this->affectedRows(). ' phần tử được thay đổi trạng thái!'));
			}else{
				Session::set('message', array('class' => 'error', 'content' => 'Vui lòng chọn vào phần tử muỗn thay đổi trạng thái!'));
			}
		}
	}
	
	public function deleteItem($arrParam, $option = null){
		if($option == null){
			if(!empty($arrParam['cid'])){
				$ids		= $this->createWhereDeleteSQL($arrParam['cid']);
				
				// Remove image
				$query		= "SELECT `id`, `picture` AS `name` FROM `$this->table` WHERE `id` IN ($ids)";
				$arrImage	= $this->fetchPairs($query);
				require_once LIBRARY_EXT_PATH . 'Upload.php';
				$uploadObj	= new Upload();
				foreach ($arrImage as $value){
					$uploadObj->removeFile('experience', $value);
					$uploadObj->removeFile('experience', $value);
				}
				
				$query		= "DELETE FROM `$this->table` WHERE `id` IN ($ids)";
				$this->query($query);
				Session::set('message', array('class' => 'success', 'content' => 'Có ' . $this->affectedRows(). ' phần tử được xóa!'));
			}else{
				Session::set('message', array('class' => 'error', 'content' => 'Vui lòng chọn vào phần tử muỗn xóa!'));
			}
		}
	}
	
	public function infoItem($arrParam, $option = null){
		if($option == null){
			$query[]	= "SELECT `id`, `name`, `work`,`star`, `avatar`, `content`, `status`, `ordering`";
			$query[]	= "FROM `$this->table`";
			$query[]	= "WHERE `id` = '" . $arrParam['id'] . "'";
			$query		= implode(" ", $query);
			$result		= $this->fetchRow($query);
			return $result;
		}
	}
	
	public function saveItem($arrParam, $option = null){
		require_once LIBRARY_EXT_PATH . 'Upload.php';
		$uploadObj	= new Upload();
		
		if($option['task'] == 'add'){
			$arrParam['form']['avatar']	= $uploadObj->uploadFile($arrParam['form']['avatar'], 'experience');
			$arrParam['form']['created']	= date('Y-m-d', time());
			$arrParam['form']['created_by']	= $this->_userInfo['username'];
			$arrParam['form']['content']    = mysqli_real_escape_string($this->getConnect(),$arrParam['form']['content']);
			$arrParam['form']['name']		= mysqli_real_escape_string($this->getConnect(),$arrParam['form']['name']);
			
			$data	= array_intersect_key($arrParam['form'], array_flip($this->_columns));
			$this->insert($data);
			Session::set('message', array('class' => 'success', 'content' => 'Dữ liệu được lưu thành công!'));
			return $this->lastID();
		}
		if($option['task'] == 'edit'){
			if($arrParam['form']['avatar']['name']==null){
				unset($arrParam['form']['avatar']);
			}else{
				$uploadObj->removeFile('experience', $arrParam['form']['picture_hidden']);
				$uploadObj->removeFile('experience', $arrParam['form']['picture_hidden']);
			
				$arrParam['form']['avatar']	= $uploadObj->uploadFile($arrParam['form']['avatar'], 'experience');
			}

			$arrParam['form']['modified']	= date('Y-m-d', time());
			$arrParam['form']['modified_by']= $this->_userInfo['username'];
			$arrParam['form']['content']    = mysqli_real_escape_string($this->getConnect(), $arrParam['form']['content']);
			$arrParam['form']['name']		= mysqli_real_escape_string($this->getConnect(), $arrParam['form']['name']);
			
			$data	= array_intersect_key($arrParam['form'], array_flip($this->_columns));

			$this->update($data, array(array('id', $arrParam['form']['id'])));
			Session::set('message', array('class' => 'success', 'content' => 'Dữ liệu được lưu thành công!'));
			return $arrParam['form']['id'];
		}
	}
	
	public function ordering($arrParam, $option = null){
		if($option == null){
			if(!empty($arrParam['order'])){
				$i = 0;
				$modified_by	= $this->_userInfo['username'];
				$modified		= date('Y-m-d', time());
				foreach($arrParam['order'] as $id => $ordering){
					$i++;
					$query	= "UPDATE `$this->table` SET `ordering` = $ordering, `modified` = '$modified', `modified_by` = '$modified_by'  WHERE `id` = '" . $id . "'";
					$this->query($query);
				}
				Session::set('message', array('class' => 'success', 'content' => 'Có ' .$i. ' phần tử được thay đỏi  ordering!'));
			}
		}
	}
}