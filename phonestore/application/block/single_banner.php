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



<div class="section bg_light_blue2 pb-0 pt-md-0">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-6 offset-md-1">
                    <div class="medium_divider d-none d-md-block clearfix"></div>
                    <div class="trand_banner_text text-center text-md-left">
                        <div class="heading_s1 mb-3">
                            <span style="color:#17a2b8" class="sub_heading">Xu hướng điện thoại giới trẻ!</span>
                            <h2>Nhanh tay sở hữu</h2>
                        </div>
                        <h5 class="mb-4">Tưng bừng mua sắm, Nhận quà liền tay</h5>
                        <a href="<?php echo  $link1  ?>" class="btn btn-fill-out rounded-0">Xem ngay</a>
                    </div>
                    <div class="medium_divider clearfix"></div>
                </div>
                <div class="col-md-5">
                    <div class="text-center trading_img">
                    <img src="<?=TEMPLATE_URL?>phone/main/assets/images/iphone-15-pro.png" alt="tranding_img"/>
                    </div>
                </div>
            </div>
        </div>
    </div>