<?php 
    $menu_active="home";
    ?>
<!-- START HEADER -->
<?php include_once '../html/layout_header.php';?>
<!-- END HEADER-->
<!-- START SECTION SLIDER-->
<?php include_once '../widgets/slider.php';?>
<!-- END SECTION SLIDER -->
<div class="main_content">
    <!-- START SECTION BANNER -->
    <?php include_once '../widgets/banner.php';?>
    <!-- END SECTION BANNER -->
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
                                    for($i=0;$i<8;$i++){
                                        include '../element/item-product-home.php';
                                    }
                                    ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="row shop_container">
                                <?php
                                    for($i=0;$i<8;$i++){
                                        include '../element/item-product-home.php';
                                    }
                                    ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                            <div class="row shop_container">
                                <?php
                                    for($i=0;$i<8;$i++){
                                        include '../element/item-product-home.php';
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
    <!-- START SECTION SINGLE BANNER --> 
    <div class="section bg_light_blue2 pb-0 pt-md-0">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-6 offset-md-1">
                    <div class="medium_divider d-none d-md-block clearfix"></div>
                    <div class="trand_banner_text text-center text-md-left">
                        <div class="heading_s1 mb-3">
                            <span class="sub_heading">Xu hướng thời trang hè!</span>
                            <h2>Bộ sưu tập hè</h2>
                        </div>
                        <h5 class="mb-4">Tưng bừng mua sắm, Nhận quà liền tay</h5>
                        <a href="list-product.php" class="btn btn-fill-out rounded-0">Xem ngay</a>
                    </div>
                    <div class="medium_divider clearfix"></div>
                </div>
                <div class="col-md-5">
                    <div class="text-center trading_img">
                        <img src="../assets/images/tranding_img.png" alt="tranding_img"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            for($i=0;$i<8;$i++){
                                include '../element/item-slider-product-home.php';
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
    <!-- START SECTION SHOP INFO -->
    <div class="section-info  bg_light_blue2">
        <?php include_once '../widgets/info.php';?>
    </div>
    <!-- END SECTION SHOP INFO -->
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <?php include_once '../widgets/subscribe.php';?>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->
<!-- START FOOTER-->
<?php include_once '../html/layout_footer.php';?>
<!-- END FOOTER-->