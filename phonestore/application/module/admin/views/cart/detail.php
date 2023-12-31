<?php
$Items = $_SESSION['cart'];
$xhtmlCartItems = '';
if (!empty($Items)) {
    $total = 0;
    foreach ($Items as $Item) {
        $id = $Item['id'];
        $name = $Item['name'];
        $quantity = $Item['num'];
        $picture = $Item['picture'];
        $totalOneProduct = $Item['sale_off'] * $quantity;
        $total += $totalOneProduct;
        $description = $Item['description'];
        $price = number_format($Item['price'], 0, ',', '.');
        $saleOff = number_format($Item['sale_off'], 0, ',', '.');
        $totalOneProduct = number_format($totalOneProduct, 0, ',', '.');
        $xhtmlCartItems .= '<tr>
                                    <td class="product-thumbnail"><a href="detail-product-' . $id . '.html">
                                    <img src="' . UPLOAD_URL . 'product/' . $picture . '" alt="' . $name . '">
                                    </a></td>
                                    <td class="product-name" data-title="Product"><a href="detail-product-' . $id . '.html">' . $name . '</a></td>
                                    <td class="product-price" data-title="Price">' . $saleOff . 'đ</td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="button" value="-" class="minus" onclick="addMoreCart(' . $id . ',-1)" />
                                            <input type="number" id="num_' . $id . '" value="' . $quantity . '" title="Qty" class="qty" size="8" step="1" min="0" onchange="fixCartNum(' . $id . ')" />
                                            <input type="button" value="+" class="plus" onclick="addMoreCart(' . $id . ',1)" />
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">' . $totalOneProduct . 'đ</td>
                                    <td class="product-remove" data-title="Remove"><a href="#" onclick="updateCart(' . $id . ', 0)"><i class="ti-close"></i></a></td>
                                </tr>';
    }


    $discount = 0;
}

?>
<?php if (!empty($Items) && isset($_SESSION['cart'])) { ?>
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
                                echo $xhtmlCartItems;
                                ?>
                            </tbody>
                            <!-- <tfoot>
                            <tr>
                                <td colspan="6" class="px-0">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-lg-12 col-md-6 text-left text-md-right">
                                            <button class="btn btn-line-fill btn-sm cart-button" type="submit">Cập nhật
                                                giỏ hàng</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot> -->
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
                                        <td class="cart_total_amount">
                                            <?php echo number_format($total, 0, ',', '.'); ?>đ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Giảm giá </td>
                                        <td class="cart_total_amount">
                                            <?php echo number_format($discount, 0, ',', '.'); ?>đ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">Thành tiền</td>
                                        <td class="cart_total_amount"><strong>
                                                <?php echo number_format($total - $discount, 0, ',', '.'); ?>đ
                                            </strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="checkout.html" class="btn btn-fill-out">Tiến hành đặt hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

<?php } else { ?>
    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <h3>Giỏ hàng của bạn đang trống</h3>
                    <a href="home.html" class="btn btn-fill-out">Quay về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
<?php } ?>