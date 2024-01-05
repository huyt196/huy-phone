<?php

$Items = $_SESSION['cart'];
$xhtmlCartItems = '';
if (!empty($Items)) {
	foreach ($Items as $Item) {
		$query = "SELECT `name` FROM `" . TBL_CATEGORYPHONE . "` WHERE `id` = '" . $Item['category_phone_id'] . "'";
		$data	= $model->fetchAll($query);
		$namelink = implode("", $data['0']);
		$phoneID = $Item['id'];
        $catID = $Item['category_phone_id'];
		$name = $Item['name'];
		$phoneNameURL = URL::filterURL($name);
        $catNameURL = URL::filterURL($namelink);
		$saleOff = number_format($Item['sale_off'], 0, ',', '.');
		$link = URL::createLink('phone', 'phone', 'detail', array('category_phone_id' => $value['category_phone_id'], 'phone_id' => $value['id']), "$catNameURL/$phoneNameURL-$catID-$phoneID.html");
		;
		$xhtmlCartItems .= '<li>
							<button class="item_remove btn btn-light btn-sm border-0" onclick="updateCart(' . $Item['id'] . ', 0)"><i class="ion-close"></i></button>
							<a href="'.$link.'"><img src="' . UPLOAD_URL . 'phone/' . $Item['picture'] . '" alt="' . $Item['name'] . '">' . $Item['name'] . '</a>
							<span class="cart_quantity"> ' . $Item['num'] . ' x <span class="cart_amount"> <span class="price_symbole"></span></span>' . $saleOff . 'đ</span>
						</li>';
	}
}
?>

<?php echo $xhtmlCartItems; ?>