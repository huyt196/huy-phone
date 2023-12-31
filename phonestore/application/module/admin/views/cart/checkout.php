<?php
$Items = $_SESSION['cart'];
$xhtmlCartItems = '';
if (!empty($Items)) {
    $total = 0;
    foreach ($Items as $Item) {
        $id = $Item['id'];
        $name = $Item['name'];
        $quantity = $Item['num'];
        $totalOneProduct = $Item['sale_off'] * $quantity;
        $total += $totalOneProduct;
        $saleOff = number_format($Item['sale_off'], 0, ',', '.');
        $totalOneProduct = number_format($totalOneProduct, 0, ',', '.');
        $xhtmlCartItems .= '<tr>
                            <td>' . $name . '<span class="product-qty"> x ' . $quantity . '</span></td>
                            <td>' . $totalOneProduct . 'đ</td>
                        </tr>';
    }
}
$discount = 0;
?>


<div class="section">
    <div class="container">
        <form method="post" action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>Thông tin giao hàng</h4>
                        <?php echo $this->errorCheckout;?>
                    </div>
                    
                        <div class="form-group">
                            <input type="text" required class="form-control" name="fullname" placeholder="Họ và tên" value="<?=$this->customerInfo['fullname']?>">
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-control" name="email" placeholder="Email" value="<?=$this->customerInfo['email']?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" required type="text" name="phone_number" placeholder="Số điện thoại" value="<?=$this->customerInfo['phone_number']?>">
                        </div>
                        <div class="form-group">
                            <textarea rows="3" class="form-control" placeholder="Địa chỉ" name="address" required ><?=$this->customerInfo['address']?></textarea>
                        </div>
                        <div class="form-group">
                            <textarea rows="5" class="form-control" placeholder="Ghi chú đặt hàng" name="note" ><?=$this->customerInfo['note']?></textarea>
                        </div>
                        <!-- <div class="form-group create-account">
                            <input class="form-control" required type="password" placeholder="Password" name="password">
                        </div>
                        <div class="ship_detail">
                            <div class="different_address">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="fname"
                                        placeholder="First name *">
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="lname" placeholder="Last name *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="cname"
                                        placeholder="Company Name">
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
                                    <input type="text" class="form-control" name="billing_address" required=""
                                        placeholder="Address *">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="billing_address2" required=""
                                        placeholder="Address line2">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="city"
                                        placeholder="City / Town *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="state"
                                        placeholder="State / County *">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" name="zipcode"
                                        placeholder="Postcode / ZIP *">
                                </div>
                            </div>
                        </div> -->
                    
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
                                    <?php echo $xhtmlCartItems;?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tạm tính</th>
                                        <td class="product-subtotal"><?php echo number_format($total, 0, ',', '.');?>đ</td>
                                    </tr>
                                    <tr>
                                        <th>Giảm giá</th>
                                        <td>-<?php echo number_format($discount, 0, ',', '.');?>đ</td>
                                    </tr>
                                    <tr>
                                        <th>Thành tiền</th>
                                        <td class="product-subtotal"><?php echo number_format($total - $discount, 0, ',', '.');?>đ</td>
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
                        <input class="btn btn-danger btn-block" type="submit" value="Đặt hàng" name="btn-submit-complete"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>