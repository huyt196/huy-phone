<?php
$Items = $_SESSION['cart'];
$xhtmlCartItems = '';
if (!empty($Items)) {
	foreach ($Items as $Item) {
		$saleOff = number_format($Item['sale_off'], 0, ',', '.');
		;
		$xhtmlCartItems .= '<li>
							<button class="item_remove btn btn-light btn-sm border-0" onclick="updateCart(' . $Item['id'] . ', 0)"><i class="ion-close"></i></button>
							<a href="detail-product-' . $Item['id'] . '.html"><img src="' . UPLOAD_URL . 'phone/' . $Item['picture'] . '" alt="' . $Item['name'] . '">' . $Item['name'] . '</a>
							<span class="cart_quantity"> ' . $Item['num'] . ' x <span class="cart_amount"> <span class="price_symbole"></span></span>' . $saleOff . 'đ</span>
						</li>';
	}
}
?>

<?php echo $xhtmlCartItems; ?>