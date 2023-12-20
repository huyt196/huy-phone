






<?php
	$xhtml = '';
	if(!empty($this->Items)){
      
	
		foreach($this->Items as $key => $value){
			$name	= $value['name'];
		
			$phoneID		= $value['id'];
			$catID			= $value['category_phone_id'];
			$price 			= $value['price'];
			$phoneNameURL	= URL::filterURL($name);
			$catNameURL		= URL::filterURL( $this->categoryName);
				
			$link	= URL::createLink('phone', 'phone', 'detail', array('category_phone_id' => $value['category_phone_id'],'phone_id' => $value['id']), "$catNameURL/$phoneNameURL-$catID-$phoneID.html");
			
			$description	= substr($value['description'], 0, 200);
			
			$picture 		= Helper::createImage('phone', '', $value['picture']);	

			$xhtml .= '<div class="col-md-4 col-6">
			<div class="product">
				<div class="product_img">
					<a href="shop-product-detail.html">
					'.$picture.'
					</a>
					<div class="product_action_box">
						<ul class="list_none pr_action_btn">
							<li class="add-to-cart"><a href="'.$link.'"><i class="icon-basket-loaded"></i> Chọn Mua</a></li>
							<li><a href="shop-quick-view.php" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
							<li><a href="#"><i class="icon-heart"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="product_info">
					<h6 class="product_title"><a href="'.$link.'">'.$name.'</a></h6>
					<div class="product_price">
						<span class="price">'.number_format($price).'đ</span>
						<del>1.200.000đ</del>
						<!-- <div class="on_sale">
							<span>Tiết kiệm: 35%</span>
						</div> -->
					</div>
					<div class="pr_desc">
						<p>'.$description.'</p>
					</div>
					<div class="list_product_action_box">
						<ul class="list_none pr_action_btn">
							<li class="add-to-cart"><a href="'.$link.'"><i class="icon-basket-loaded"></i> Chọn mua</a></li>
							<li><a href="//bestwebcreator.com/shopwise/demo/shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
							<li><a href="//bestwebcreator.com/shopwise/demo/shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
							<li><a href="#"><i class="icon-heart"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>';

		}
	}




?>



 <!-- START SECTION SHOP -->
 <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_left">
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="order">Sắp xếp</option>
                                            <option value="popularity">Xem nhiều nhất</option>
                                            <option value="date">Mới nhất</option>
                                            <option value="price">Giá: thấp đến cao</option>
                                            <option value="price-desc">Giá : cao đến thấp</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                    </div>
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="">Showing</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_container">   
                        <?php
                        echo $xhtml;
                            ?>
                    </div>
                    <!-- START PANIGATION  -->
                    <?php include_once TEMPLATE_PATH . 'phone/main/widgets/panigation.php';?>
                    <!-- END PANIGATION -->
                </div>
                <div class="col-lg-3 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="sidebar">
                    <?php include_once BLOCK_PATH . 'sidebar-categories.php';?>
                        <?php include_once TEMPLATE_PATH . 'phone/main/widgets/sidebar-filter.php';?>
             
                       
                        <?php include_once TEMPLATE_PATH . 'phone/main/widgets/sidebar-banner.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->