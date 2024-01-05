<?php

//$paginationHTML = $this->pagination->showPagination(URL::createLink('phone', 'phone', 'list'), ['phone' => true]);

$xhtml = '';
if (!empty($this->Items)) {


    foreach ($this->Items as $key => $value) {
        $name = $value['name'];
        $saleOff = number_format($value['sale_off']);
        $phoneID = $value['id'];
        $catID = $value['category_phone_id'];
        $price = $value['price'];
        $phoneNameURL = URL::filterURL($name);
        $catNameURL = URL::filterURL($value['category_name']);
        //$linkzoom	= URL::createLink('phone', 'phone', 'quickView', array('phone_id' => $value['id']));
        $link = URL::createLink('phone', 'phone', 'detail', array('category_phone_id' => $catID, 'phone_id' => $value['id']), "$catNameURL/$phoneNameURL-$catID-$phoneID.html");

        $description = substr($value['description'], 0, 200);

        $picture = Helper::createImage('phone', '', $value['picture']);

        $xhtml .= '<div class="col-md-3 col-6">
			<div class="product">
				<div class="product_img">
					<a href="shop-product-detail.html">
					' . $picture . '
					</a>
					<div class="product_action_box">
						<ul class="list_none pr_action_btn">
							<li class="add-to-cart"><a href="#" onclick="addCart('. $phoneID .', 1)" ><i class="icon-basket-loaded"></i> Chọn Mua</a></li>
							<li><a href="'.$linkzoom.'" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
							<li><a href="#"><i class="icon-heart"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product_info">
					<h6 class="product_title"><a href="' . $link . '">' . $name . '</a></h6>
					<div class="product_price">
						<span class="price">' . number_format($price) . 'đ</span>
						<del>' . $saleOff . 'đ</del>
						<!-- <div class="on_sale">
							<span>Tiết kiệm: 35%</span>
						</div> -->
					</div>
					<div class="pr_desc">
						<p>' . $description . '</p>
					</div>
					
				</div>
			</div>
		</div>';

    }
} else {
    $xhtml = '<h5>Không tìm thấy sản phẩm bạn muốn tìm!</h5>';
}





?>



<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <?php echo $xhtml;?>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->