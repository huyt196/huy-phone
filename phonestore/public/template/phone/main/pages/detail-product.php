<?php 
    $name_page="ĐẦM VẢI DỆT";
    $breadcrumb = ' <li class="breadcrumb-item"><a href="list-product.php">Thời trang Nữ</a></li>
                    <li class="breadcrumb-item"><a href="#">'.$name_page.'</a></li>';
?>
<!-- START HEADER -->
<?php include_once '../html/layout_header.php';?>
<!-- END HEADER-->
<!-- START SECTION BREADCRUMB -->
<?php include_once '../widgets/breadcrumb.php';?>
<!-- END SECTION BREADCRUMB -->
<!-- START MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                            <div class="product-image">
                                <div class="product_img_box">
                                    <img id="product_img" src='../assets/images/1.jpg' data-zoom-image="../assets/images/1.jpg" alt="product_img1" />
                                    <a href="#" class="product_img_zoom custom-zoom" title="Zoom">
                                        <span class="linearicons-zoom-in"></span>
                                    </a>
                                </div>
                                <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                                    <div class="item">
                                        <a href="#" class="product_gallery_item active" data-image="../assets/images/1.jpg" data-zoom-image="../assets/images/1.jpg">
                                        <img src="../assets/images/1.jpg" alt="product_small_img1" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="product_gallery_item" data-image="../assets/images/2.jpg" data-zoom-image="../assets/images/2.jpg">
                                        <img src="../assets/images/2.jpg" alt="product_small_img2" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="product_gallery_item" data-image="../assets/images/3.jpg" data-zoom-image="../assets/images/3.jpg">
                                        <img src="../assets/images/3.jpg" alt="product_small_img3" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="product_gallery_item" data-image="../assets/images/4.jpg" data-zoom-image="../assets/images/4.jpg">
                                        <img src="../assets/images/4.jpg" alt="product_small_img4" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="pr_detail">
                                <div class="product_description">
                                    <h4 class="product_title"><a href="#">ĐẦM VẢI DỆT</a></h4>
                                    <div class="product_price">
                                        <span class="price">700.000đ</span>
                                        <del>1.200.000đ</del>
                                        <!-- <div class="on_sale">
                                            <span>Tiết kiệm: 35%</span>
                                        </div> -->
                                    </div>
                                    <div class="pr_desc">
                                        <p>Váy liền chất liệu rib phối sợi kim tuyến. Phom regular, cổ xoắn kiểu, tay dài. Thích hợp mặc mùa thu đông…</p>
                                    </div>
                                    <div class="product_sort_info">
                                        <ul>
                                            <li><i class="flaticon-shipped custom-icon-top"></i>Thời gian giao hàng ước tính sẽ dao động trong khoảng 3-7 ngày làm việc, tùy thuộc vào địa chỉ giao hàng.</li>
                                            <li><i class="linearicons-sync"></i> Thời hạn trả hàng MIỄN PHÍ cho đơn hàng quý khách là 30 ngày kể từ ngày quý khách nhận được email xác nhận giao hàng.</li>
                                            <!-- <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li> -->
                                        </ul>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <span class="switch_lable">Size</span>
                                        <div class="product_size_switch">
                                            <span>xs</span>
                                            <span>s</span>
                                            <span>m</span>
                                            <span>l</span>
                                            <span>xl</span>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="cart_extra">
                                    <div class="cart-product-quantity">
                                        <div class="quantity">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </div>
                                    <div class="cart_btn">
                                        <button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i>Chọn mua</button>
                                        <!-- <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                        <a class="add_wishlist" href="#"><i class="icon-heart"></i></a> -->
                                    </div>
                                </div>
                                <hr />
                                <div class="product_share">
                                    <span>Chia sẻ:</span>
                                    <ul class="social_icons js_share">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="large_divider clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-style3">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Miêu tả</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Thông tin chi tiết</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab">
                                    <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                        <p>Váy liền chất liệu rib phối sợi kim tuyến. Phom regular, cổ xoắn kiểu, tay dài. Thích hợp mặc mùa thu đông. Kiểu dáng đơn giản, có phần nữ tính, phù hợp nhiều hoàn cảnh. Phối hợp cùng giày cao gót,boss,…</p>
                                        <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p> -->
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Thương hiệu</td>
                                                <td>Canifa</td>
                                            </tr>
                                            <tr>
                                                <td>Xuất xứ thương hiệu</td>
                                                <td>Việt Nam</td>
                                            </tr>
                                            <tr>
                                                <td>Xuất xứ</td>
                                                <td>Việt Nam</td>
                                            </tr>
                                            <tr>
                                                <td>Màu sắc</td>
                                                <td>Đen, nâu, xám</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td> s, m, l, xl, </td>
                                            </tr>
                                            <tr>
                                                <td>Chất liệu</td>
                                                <td>100% cotton.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="small_divider"></div>
                            <div class="divider"></div>
                            <div class="medium_divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="heading_s1">
                                <h3>Sản phẩm tương tự</h3>
                            </div>
                            <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "992":{"items": "2"}, "1199":{"items": "3"}}'>
                                <?php
                                    for($i=0;$i<9;$i++){
                                        include '../element/item-releted-product.php';
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="sidebar">
                        <?php include_once '../widgets/sidebar-categories.php';?>
                        <?php include_once '../widgets/sidebar-recent-items.php';?>
                        <?php include_once '../widgets/sidebar-tags.php';?>
                        <?php include_once '../widgets/sidebar-banner.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <?php include_once '../widgets/subscribe.php';?>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->
<!-- START FOOTER-->
<?php include_once '../html/layout_footer.php';?>
<!-- END FOOTER-->