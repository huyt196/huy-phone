<?php 
    $name_page="Thanh toán";
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
                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>Thông tin giao hàng</h4>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" required class="form-control" name="fname" placeholder="Họ và tên">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" name="lname" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" required type="text" name="cname" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <textarea rows="3" class="form-control" placeholder="Địa chỉ"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea rows="5" class="form-control" placeholder="Ghi chú đặt hàng"></textarea>
                        </div>
                        <div class="form-group create-account">
                            <input class="form-control" required type="password" placeholder="Password" name="password" >
                        </div>
                        <div class="ship_detail">
                            <div class="different_address">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="fname" placeholder="First name *">
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="lname" placeholder="Last name *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="cname" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <div class="custom_select">
                                        <select class="form-control">
                                            <option value="">Select an option...</option>
                                            <option value="US">USA (US)</option>
                                            <option value="VN">Vietnam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="billing_address" required="" placeholder="Address *">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="billing_address2" required="" placeholder="Address line2">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="city" placeholder="City / Town *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="state" placeholder="State / County *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="zipcode" placeholder="Postcode / ZIP *">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="heading_s1">
                            <h4>Đơn hàng</h4>
                        </div>
                        <div class="table-responsive order_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Đầm vải dệt<span class="product-qty">x 2</span></td>
                                        <td>700.000đ</td>
                                    </tr>
                                    <tr>
                                        <td>Đầm vải dệt<span class="product-qty">x 1</span></td>
                                        <td>700.000đ</td>
                                    </tr>
                                    <tr>
                                        <td>Đầm vải dệt<span class="product-qty">x 3</span></td>
                                        <td>700.000đ</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tạm tính</th>
                                        <td class="product-subtotal">4.200.000đ</td>
                                    </tr>
                                    <tr>
                                        <th>Giảm giá</th>
                                        <td>-200.000đ</td>
                                    </tr>
                                    <tr>
                                        <th>Thành tiền</th>
                                        <td class="product-subtotal">4.000.000đ</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- <div class="payment_method">
                            <div class="heading_s1">
                                <h4>Payment</h4>
                            </div>
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="">
                                    <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                    <p data-method="option3" class="payment-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                    <p data-method="option4" class="payment-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                                    <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                    <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                </div>
                            </div>
                        </div> -->
                        <a href="#" class="btn btn-fill-out btn-block">Đặt hàng</a>
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