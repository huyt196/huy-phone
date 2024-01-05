<?php
define('DS', '/');
define('ROOT_URL', DS . 'phonestore' . DS);
define('PUBLIC_URL', ROOT_URL . 'public' . DS);
define('TEMPLATE_URL', PUBLIC_URL . 'template' . DS);
define('UPLOAD_URL', PUBLIC_URL . 'files' . DS);

$id = $this->phoneInfo['id'];
$picture = $this->phoneInfo['picture'];
$name = $this->phoneInfo['name'];
$saleOff = number_format($this->phoneInfo['sale_off'], 0, ',', '.');
$price = number_format($this->phoneInfo['price'], 0, ',', '.');
$description = $this->phoneInfo['description'];
$categoryName = $this->phoneInfo['category_name'];
$categoryID = $this->phoneInfo['category_phone_id'];

?>
<div class="ajax_quick_view">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            <div class="product-image">
                <div class="product_img_box">
                    <img id="product_img" src="<?= UPLOAD_URL ?>phone/<?= $picture ?>"
                    data-zoom-image="<?= UPLOAD_URL ?>phone/<?= $picture ?>" alt="<?= $name ?>" />
                </div>
                <!-- <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4"
                    data-slides-to-scroll="1" data-infinite="false">
                    <div class="item">
                        <a href="#" class="product_gallery_item active"
                            data-image="<?= UPLOAD_URL ?>product/<?= $picture ?>"
                            data-zoom-image="<?= UPLOAD_URL ?>product/<?= $picture ?>">
                            <img src="<?= UPLOAD_URL ?>product/<?= $picture ?>" alt="<?= $name ?>" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="product_gallery_item"
                            data-image="<?= UPLOAD_URL ?>product/<?= $picture ?>"
                            data-zoom-image="<?= UPLOAD_URL ?>product/<?= $picture ?>">
                            <img src="<?= UPLOAD_URL ?>product/<?= $picture ?>" alt="<?= $name ?>" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="product_gallery_item"
                            data-image="<?= UPLOAD_URL ?>product/<?= $picture ?>"
                            data-zoom-image="<?= UPLOAD_URL ?>product/<?= $picture ?>">
                            <img src="<?= UPLOAD_URL ?>product/<?= $picture ?>" alt="<?= $name ?>" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="product_gallery_item"
                            data-image="<?= UPLOAD_URL ?>product/<?= $picture ?>"
                            data-zoom-image="<?= UPLOAD_URL ?>product/<?= $picture ?>">
                            <img src="<?= UPLOAD_URL ?>product/<?= $picture ?>" alt="<?= $name ?>" />
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="pr_detail">
                <div class="product_description">
                    <h4 class="product_title"><a href="#">
                            <?= $name ?>
                        </a></h4>
                    <div class="product_price">
                        <span class="price">
                            <?=    $saleOff?>đ
                        </span>
                        <del>
                            <?= $price?>đ
                        </del>
                        <!-- <div class="on_sale">
                           <span>Tiết kiệm: 41%</span>
                       </div> -->
                    </div>
                    <div class="pr_desc">
                        <p>
                            <?= $description ?>
                        </p>
                    </div>
                    <div class="product_sort_info">
                        <ul>
                            <li><i class="flaticon-shipped custom-icon-top"></i>Thời gian giao hàng ước tính sẽ dao động
                                trong khoảng 3-7 ngày làm việc, tùy thuộc vào địa chỉ giao hàng.</li>
                            <li><i class="linearicons-sync"></i> Thời hạn trả hàng MIỄN PHÍ cho đơn hàng quý khách là 30
                                ngày kể từ ngày quý khách nhận được email xác nhận giao hàng.</li>
                        </ul>
                    </div>
                    <!-- <div class="pr_switch_wrap">
                        <span class="switch_lable">Size</span>
                        <div class="product_size_switch">
                            <span>xs</span>
                            <span>s</span>
                            <span>m</span>
                            <span>l</span>
                            <span>xl</span>
                        </div>
                    </div> -->
                </div>
                <hr />
                <div class="cart_extra">
                    <div class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input type="text" name="num" value="1" title="Qty" class="qty" size="4" onchange="fixCartNum()">
                            <input type="button" value="+" class="plus">
                        </div>
                    </div>
                    <div class="cart_btn">
                        <button class="btn btn-fill-out btn-addtocart" type="button" id="shop-quick-add" onclick="addCart(<?=$id?>, $('[name=num]').val())"><i
                                class="icon-basket-loaded"></i> Chọn mua</button>
                    </div>
                </div>
                <hr />
                <div class="product_share">
                    <span>Chia sẽ:</span>
                    <ul class="social_icons">
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
</div>
<script src="<?= TEMPLATE_URL ?>phone/main/assets/js/scripts.js"></script>