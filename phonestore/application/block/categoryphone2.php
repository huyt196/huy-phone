<?php

	$model 	= new Model();
	$query	="SELECT `id`, `name`, `picture` FROM `".TBL_CATEGORYPHONE."` WHERE `id`  = 3 ORDER BY `name` ASC";

		$data	= $model->fetchAll($query);

	$xhtml = '';

	if(!empty($data)){
		foreach($data as $key => $value){
			$name	 		= $value['name'];
			$nameURL		= URL::filterURL($name);
			$id				= $value['id'];
			$link	 		= URL::createLink('phone', 'phone', 'list', array('category_phone_id' => $id), "$nameURL-$id.html");
			$picture 		= Helper::createImage('category', '', $value['picture'], array('class' => 'thumb'));
			$xhtml 	.= '<li><a class="dropdown-item nav-link nav_item" href="'.$link.'">'.$name.'</a></li>';
		}
	}
	echo $xhtml;
?>
