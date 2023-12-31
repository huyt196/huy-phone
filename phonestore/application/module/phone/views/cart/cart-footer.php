<?php
$total = 0;
if (!empty($Items)) {
    foreach ($Items as $Item) {
        $total += $Item['num'] * $Item['sale_off'];
    }
    $total = number_format($total, 0, ',', '.');

    $xhtmlCartFooter = '<p class="cart_total"><strong>Thành tiền:</strong> <span class="cart_price"> <span
                            class="price_symbole"></span></span>
                            ' . $total . 'đ
                        </p>
                        <p class="cart_buttons"><a href="basket.html" class="btn btn-fill-line rounded-0 view-cart">Giỏ hàng</a><a
                        href="checkout.html" class="btn btn-fill-out rounded-0 checkout">Đặt hàng</a></p>';
} else {
    $xhtmlCartFooter = '<p class="cart_total"><strong>Giỏ hàng của bạn hiện có 0 sản phẩm</strong> 
                        </p>';
}

?>
<div class="cart_footer">
    <?php echo $xhtmlCartFooter; ?>
</div>