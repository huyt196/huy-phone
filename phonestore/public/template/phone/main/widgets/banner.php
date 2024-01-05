
<?php
	$model 	= new Model();
	$query	="SELECT `b`.`id`, `b`.`name`, `w`.`name` AS `title`,`w`.`description`, `w`.`class`,`w`.`picture`
	FROM ".TBL_CATEGORYPHONE." AS `b` , ".TBL_SLIDER." AS `w`
	WHERE `b`.`id` = `w`.`category_phone_id`
	GROUP BY `w`.`category_phone_id`";
		$data	= $model->fetchAll($query);
$nameURL1		= URL::filterURL($data['0']['name']);
 $id1				= $data['0']['id'];
 $link1	 		= URL::createLink('phone', 'phone', 'list', array('category_phone_id' => $id1), "$nameURL1-$id1.html");
 $link2	 		= URL::createLink('phone', 'phone', 'list', array('category_phone_id' => $id2), "$nameURL2-$id2.html");

?>
<div class="section pb_20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single_banner">
                <img src="<?=TEMPLATE_URL?>phone/main/assets/images/iphone-12-pro111.jpg" alt="shop_banner_img1"/>
                    <div class="single_banner_info">
                        <h5 style="color:#212529;" class="single_bn_title1">Hot</h5>
                        <h3 style="color:#212529;" class="single_bn_title">Điện thoại mới!</h3>
                        <a style="color:#212529;" href="<?php echo  $link1  ?>" class="single_bn_link">Xem ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single_banner">
                <img src="<?=TEMPLATE_URL?>phone/main/assets/images/iPhone-14-Promax.jpg" alt="shop_banner_img2"/>
                    <div class="single_banner_info">
                        <h3 style="color:#212529;" class="single_bn_title">FLASH SALE</h3>
                        <h4 style="color:#212529;" class="single_bn_title1">Giảm tới 40%</h4>
                        <a style="color:#212529;" href="<?php echo  $link1  ?>" class="single_bn_link">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>