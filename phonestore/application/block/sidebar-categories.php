<?php

	$model 	= new Model();
	$query	="SELECT `b`.`id`, `b`.`name`, COUNT(`w`.`name`)  AS `total`
	FROM ".TBL_CATEGORYPHONE." AS `b` , ".TBL_PHONE." AS `w`
	WHERE `b`.`id` = `w`.`category_phone_id`
	GROUP BY `w`.`category_phone_id`";

		$data	= $model->fetchAll($query);


	$xhtml = '';

	if(!empty($data)){
		foreach($data as $key => $value){
			$name	 		= $value['name'];
			$total          = $value['total'];
			$nameURL		= URL::filterURL($name);
			$id				= $value['id'];
			$link	 		= URL::createLink('phone', 'phone', 'list', array('category_phone_id' => $id), "$nameURL-$id.html");
			$picture 		= Helper::createImage('category', '', $value['picture'], array('class' => 'thumb'));
			$xhtml 	.= '        <li><a href="'.$link.'"><span class="categories_name">'.$name.'</span><span class="categories_num">('.$total.')</span></a></li>';
		}
	}
	
?>

<div class="widget">
    <h5 class="widget_title">Các loại điện thoại</h5>
    <ul class="widget_categories">
        <?php
    echo $xhtml;

?>
    </ul>
</div>
