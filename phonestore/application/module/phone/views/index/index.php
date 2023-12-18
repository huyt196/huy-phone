<?php


// Slider-product-home
$slider_home_list = '';
if(!empty($this->specialPhone)){
foreach($this->specialPhone as $key => $value){
    $name	= $value['name'];
    $phoneID =$value['id'];
    $category_phone =   $value['category_phone_id'];
    $phoneNameURL	= URL::filterURL($name);
	$catNameURL		= URL::filterURL($value['category_name']);
	$description	= substr($value['description'], 0, 200);
    $sourcePicture 		= $value['picture'];
    $uploadFolder ='phone';

    $picture = '<img src="' . UPLOAD_URL . $uploadFolder . '/' . $sourcePicture . '" alt="' . $name . '">';
    $price = number_format($value['price'], 0, ",", ".");
 

    $slider_home_list .= '<div class="item">
    <div class="product">
        <div class="product_img">
            <a href="shop-product-detail.html">
           '. $picture .'
            </a>
            <div class="product_action_box">
                <ul class="list_none pr_action_btn">
                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Chọn mua</a></li>
                    <li><a href="shop-quick-view.php" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                    <li><a href="#"><i class="icon-heart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_info">
            <h6 class="product_title"><a href="detail-product.php">'.$name.'</a></h6>
            <div class="product_price">
                <span class="price">'.$price.'đ</span>
                <del>1.200.000đ</del>
                <!-- <div class="on_sale">
                    <span>Tiết kiệm: 35%</span>
                </div> -->
            </div>
            <div class="pr_desc">
                <p>Váy liền chất liệu rib phối sợi kim tuyến. Phom regular, cổ xoắn kiểu, tay dài. Thích hợp mặc mùa thu đông…</p>
            </div>
        </div>
    </div>
</div>';
}
}
?>
<?php
// NEW-PHONE
$xhtml = '';
if(!empty($this->newPhone)){
foreach($this->newPhone as $key => $value){
    $name	= $value['name'];
    $phoneID =$value['id'];
    $category_phone =   $value['category_phone_id'];
    $phoneNameURL	= URL::filterURL($name);
	$catNameURL		= URL::filterURL($value['category_name']);
	$description	= substr($value['description'], 0, 200);
    $sourcePicture 		= $value['picture'];
    $uploadFolder ='phone';

    $picture = '<img src="' . UPLOAD_URL . $uploadFolder . '/' . $sourcePicture . '" alt="' . $name . '">';
    $price = number_format($value['price'], 0, ",", ".");
 

    $xhtml .= '<div class="col-lg-3 col-md-4 col-6">
    <div class="product">
        <div class="product_img">
            <a href="shop-product-detail.html">
            '. $picture.'
            </a>
            <div class="product_action_box">
                <ul class="list_none pr_action_btn">
                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i>Chọn mua</a></li>
                    <li><a href="shop-quick-view.php" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                    <li><a href="#"><i class="icon-heart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_info">
            <h6 class="product_title"><a href="detail-product.php">'.$name.'</a></h6>
            <div class="product_price">
                <span class="price">'.$price.'đ</span>
                <del>1.200.000đ</del>
                <!-- <div class="on_sale">
                    <span>-35%</span>
                </div> -->
            </div>
            <!-- <div class="pr_desc">
                <p>Váy liền chất liệu rib phối sợi kim tuyến. Phom regular, cổ xoắn kiểu, tay dài. Thích hợp mặc mùa thu đông…</p>
            </div> -->
        </div>
    </div>
    </div>';
}
}

?>

<?php
// NEW-PHONE
$phone_special = '';
if(!empty($this->specialPhone)){
foreach($this->specialPhone as $key => $value){
    $name	= $value['name'];
    $phoneID =$value['id'];
    $category_phone =   $value['category_phone_id'];
    $phoneNameURL	= URL::filterURL($name);
	$catNameURL		= URL::filterURL($value['category_name']);
	$description	= substr($value['description'], 0, 200);
    $sourcePicture 		= $value['picture'];
    $uploadFolder ='phone';

    $picture = '<img src="' . UPLOAD_URL . $uploadFolder . '/' . $sourcePicture . '" alt="' . $name . '">';
    $price = number_format($value['price'], 0, ",", ".");
 

    $phone_special .= '<div class="col-lg-3 col-md-4 col-6">
    <div class="product">
        <div class="product_img">
            <a href="shop-product-detail.html">
            '. $picture.'
            </a>
            <div class="product_action_box">
                <ul class="list_none pr_action_btn">
                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i>Chọn mua</a></li>
                    <li><a href="shop-quick-view.php" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                    <li><a href="#"><i class="icon-heart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_info">
            <h6 class="product_title"><a href="detail-product.php">'.$name.'</a></h6>
            <div class="product_price">
                <span class="price">'.$price.'</span>
                <del>1.200.000đ</del>
                <!-- <div class="on_sale">
                    <span>-35%</span>
                </div> -->
            </div>
            <!-- <div class="pr_desc">
                <p>Váy liền chất liệu rib phối sợi kim tuyến. Phom regular, cổ xoắn kiểu, tay dài. Thích hợp mặc mùa thu đông…</p>
            </div> -->
        </div>
    </div>
    </div>';
}
}

?>

<!-- START SECTION SHOP -->
 <div class="section small_pt pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Bộ sưu tập</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style1">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">Sản phẩm mới</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Sản phẩm nổi bật</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="special-tab" data-toggle="tab" href="#special" role="tab" aria-controls="special" aria-selected="false">Khuyến mãi
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">
                                <?php
                                echo $xhtml;
                                    ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="row shop_container">
                                <?php
                               echo $phone_special;
                                    ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                            <div class="row shop_container">
                            <div style="text-align:center" class="loading"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
    <!-- START SECTION SINGLE BANNER --> 
    <?php include_once BLOCK_PATH . 'single_banner.php';?>
    <!-- END SECTION SINGLE BANNER --> 
    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12">
                    <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        <?php
                         echo $slider_home_list;
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->


?>