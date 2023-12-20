<?php
	$model 	= new Model();
    $query[]	= "SELECT `b`.`id`, `b`.`name`, `b`.`picture`,`b`.`price`, `b`.`category_phone_id`, `c`.`name` AS `category_name`";
    $query[]	= "FROM `".TBL_PHONE."` AS `b`, `".TBL_CATEGORYPHONE."` AS `c`";
    $query[]	= "WHERE `b`.`status`  = 1  AND `c`.`id` = `b`.`category_phone_id` AND `b`.`id` <> '$phoneID' AND `c`.`id`  = '$catID'";
    $query[]	= "ORDER BY `b`.`ordering` ASC";

    $query		= implode(" ", $query);

    $data	= $model->fetchAll($query);
    $xhtmlRelatePhone = '';

	if(!empty($data)){
		foreach($data as $key => $value){
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