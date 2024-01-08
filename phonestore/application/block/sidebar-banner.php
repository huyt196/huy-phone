
<?php

	$model 	= new Model();
	$query	="SELECT `b`.`id`, `b`.`name`, COUNT(`w`.`name`)  AS `total`
	FROM ".TBL_CATEGORYPHONE." AS `b` , ".TBL_PHONE." AS `w`
	WHERE `b`.`id` = `w`.`category_phone_id` AND `b`.`id` = 1
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
    <div class="shop_banner">
        <div class="banner_img overlay_bg_20">
            <img src="<?=TEMPLATE_URL?>phone/main/assets/images/xhtnm.jpg" alt="sidebar_banner_img">
        </div>
        <div class="shop_bn_content2 text_white">
            <h5 class="text-uppercase shop_subtitle">Bộ sưu tập mới</h5>
            <h3 class="text-uppercase shop_title">Giảm tới 30%</h3>
            <a href="<?php echo $link  ?>" class="btn btn-white rounded-0 btn-sm text-uppercase">Xem ngay</a>
        </div>
    </div>
</div>