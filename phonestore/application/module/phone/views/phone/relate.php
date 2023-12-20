<?php
	$xhtmlRelatePhone = '';

	if(!empty($this->phoneRelate)){
		foreach($this->phoneRelate as $key => $value){
			$name	= $value['name'];
	
			$bookID			= $value['id'];
			$catID			= $value['category_phone_id'];
			$price = number_format($value['price']);
			$phoneNameURL	= URL::filterURL($name);
			$catNameURL		= URL::filterURL( $value['category_name']);
				
			$link	= URL::createLink('phone', 'phone', 'detail', array('category_phone_id' => $value['category_phone_id'],'phone_id' => $value['id']), "$catNameURL/$phoneNameURL-$catID-$phoneID.html");
			
			$picture 		= Helper::createImage('phone', '', $value['picture']);
			$xhtmlRelatePhone 	.= '<div class="item">
			<div class="product">
				<div class="product_img">
					<a href="shop-product-detail.html">
					'.	$picture .'
					</a>
					<div class="product_action_box">
						<ul class="list_none pr_action_btn">
							<li class="add-to-cart"><a href="'.	$link .'"><i class="icon-basket-loaded"></i> Chọn mua</a></li>
							<li><a href="shop-quick-view.php" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
							<li><a href="#"><i class="icon-heart"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product_info">
					<h6 class="product_title"><a href="detail-product.php">'.$name.'</a></h6>
					<div class="product_price">
						<span class="price">'.$price.'đ</span>
						<del>1.200.000đ</del>
						<!-- <div class="on_sale">
							<span>35% Off</span>
						</div> -->
					</div>
					
				</div>
			</div>
		</div>';
		}
	}
	echo $xhtmlRelatePhone;
?>





<div class="item">
    <div class="product">
        <div class="product_img">
            <a href="shop-product-detail.html">
            <img src="../assets/images/1.jpg" alt="product_img5">
            </a>
            <div class="product_action_box">
                <ul class="list_none pr_action_btn">
                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Chọn mua</a></li>
                    <li><a href="shop-quick-view.php" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                    <li><a href="#"><i class="icon-heart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product_info">
            <h6 class="product_title"><a href="detail-product.php">Đầm vải dệt</a></h6>
            <div class="product_price">
                <span class="price">700.000đ</span>
                <del>1.200.000đ</del>
                <!-- <div class="on_sale">
                    <span>35% Off</span>
                </div> -->
            </div>
            <div class="pr_desc">
                <p>Váy liền chất liệu rib phối sợi kim tuyến. Phom regular, cổ xoắn kiểu, tay dài. Thích hợp mặc mùa thu đông…</p>
            </div>
        </div>
    </div>
</div>