<?php
	$model 	= new Model();
	$query	="SELECT `b`.`id`, `b`.`name`, `w`.`name` AS `title`,`w`.`description`, `w`.`class`,`w`.`picture`
	FROM ".TBL_CATEGORYPHONE." AS `b` , ".TBL_SLIDER." AS `w`
	WHERE `b`.`id` = `w`.`category_phone_id`
	GROUP BY `w`.`category_phone_id`";

		$data	= $model->fetchAll($query);
$title1 = $data['0']['title'];
$title2 = $data['1']['title'];
$description1          = $data['0']['description'];
$description2          = $data['1']['description'];
$sourcePicture1 		= $data['0']['picture'];
$sourcePicture2 		= $data['1']['picture'];
$nameURL1		= URL::filterURL($data['0']['name']);
$nameURL2		= URL::filterURL($data['0']['name']);
 $id1				= $data['0']['id'];
 $id2				= $data['1']['id'];
 $link1	 		= URL::createLink('phone', 'phone', 'list', array('category_phone_id' => $id1), "$nameURL1-$id1.html");
 $link2	 		= URL::createLink('phone', 'phone', 'list', array('category_phone_id' => $id2), "$nameURL2-$id2.html");

?>
<div class="carousel-item active background_bg" data-img-src="<?=UPLOAD_URL?>slider/<?php echo $sourcePicture1  ?>">
    <div class="banner_slide_content">
        <div class="container">
            <!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-7 col-9">
                    <div class="banner_content overflow-hidden">
                        <h5 style="color:white;" class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s"><?php echo $title1 ?></h5>
                        <h2  style="color:#17a2b8;"  class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s"><?php echo $description1  ?></h2>
                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="<?php echo $link1  ?>" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
</div>
<div class="carousel-item background_bg"data-img-src="<?=UPLOAD_URL?>slider/<?php echo $sourcePicture2  ?>">
    <div class="banner_slide_content">
        <div class="container">
            <!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_content overflow-hidden">
                        <h5 style="color:white;" class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s"><?php echo $title2 ?></h5>
                        <h2 style="color:#17a2b8;" class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s"><?php echo $description2  ?></h2>
                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="<?php echo $link2  ?>" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
</div>