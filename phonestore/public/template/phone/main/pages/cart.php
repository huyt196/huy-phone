<?php 
    $name_page="Giỏ hàng";
    $breadcrumb = ' <li class="breadcrumb-item"><a href="#">'.$name_page.'</a></li>';
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
                <div class="col-12">
                    <div class="table-responsive shop_cart_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Thành tiền</th>
                                    <th class="product-remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    for($i=0;$i<3;$i++){
                                        include '../element/item-product-cart.php';
                                    }
                                    ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="px-0">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-lg-12 col-md-6 text-left text-md-right">
                                                <button class="btn btn-line-fill btn-sm cart-button" type="submit">Cập nhật giỏ hàng</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 cart-padding-bottom">
                    <div class="heading_s1 mb-3">
                        <h6>Mã giảm giá</h6>
                    </div>
                    <div class="coupon field_form input-group">
                        <input type="text" value="" class="form-control form-control-sm" placeholder="Nhập ở đây">
                        <div class="input-group-append">
                            <button class="btn btn-fill-out btn-sm cart-button" type="submit">Nhập mã giảm giá</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 p-md-4">
                        <div class="heading_s1 mb-3">
                            <h6>Giỏ hàng</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">Tạm tính</td>
                                        <td class="cart_total_amount">4.200.000đ</td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Giảm giá </td>
                                        <td class="cart_total_amount">-200.000đ</td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Thành tiền</td>
                                        <td class="cart_total_amount"><strong>4.000.000đ</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="checkout.php" class="btn btn-fill-out">Tiến hành đặt hàng</a>
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