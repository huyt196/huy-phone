<?php	
	require_once LIBRARY_EXT_PATH . 'XML.php';

	$xhtml = '';

	if(!empty($this->Items)){
		foreach($this->Items as $key => $value){
			$name	 		= $value['name'];
			$nameURL		= URL::filterURL($name);
			$id				= $value['id'];
			$link	 		= URL::createLink('phone', 'phone', 'list', array('category_phone_id' => $id), "$nameURL-$id.html");
			$picture 		= Helper::createImage('category', '', $value['picture'], array('class' => 'thumb'));
			$xhtml 	.= '<li><a class="dropdown-item nav-link nav_item" href="'.$link.'">'.$name.'</a></li>';
		}
	}
?>




<!-- LIST CATEGORIES -->

	<?php echo $xhtml;?>
