<?php
	$xhtmlRelatePhone = '';

	if(!empty($this->phoneRelate)){
		foreach($this->phoneRelate as $key => $value){
			$name	= $value['name'];
            $saleOff = number_format($value['sale_off']);
			$phoneID			= $value['id'];
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
					<h6 class="product_title"><a href="'.$link.'">'.$name.'</a></h6>
					<div class="product_price">
						<span class="price">'.$price.'đ</span>
						<del>'.$saleOff.'đ</del>
						<!-- <div class="on_sale">
							<span>35% Off</span>
						</div> -->
					</div>
					
				</div>
			</div>
		</div>';
		}
	}
	;
?>



<?php 
	$phoneInfo	= $this->phoneInfo;
    $id = $phoneInfo['id']; 
    $categoryName = $this->phoneInfo['category_name'];
    $categoryID = $this->phoneInfo['category_phone_id'];
	$name		= $phoneInfo['name'];
	$uploadFolder ='phone';
	$sourcePicture = $phoneInfo['picture'];
    $uploadFolder ='phone';
	$file_product = UPLOAD_URL . $uploadFolder . '/' . $sourcePicture;
    $picture_zoom = '<img id="product_img" src="' . $file_product . '" data-zoom-image="'  . $file_product . ' alt="'.$name.'"">';
	$picture 		= Helper::createImage('phone', '', $phoneInfo['picture']);
    $picture1 = $phoneInfo['picture'];
	$picturePath	= UPLOAD_PATH . 'phone' . DS . '' . $phoneInfo['picture'];
	$pictureFull	= '';
	if(file_exists($picturePath)==true){
		$pictureFull	= UPLOAD_URL . 'phone' . DS . $phoneInfo['picture'];
	}
	$description	= substr($phoneInfo['description'], 0, 400);
	$priceReal 		= 0;
    $price = number_format($phoneInfo['price']);
    $saleOff = number_format($phoneInfo['sale_off']);
	$linkOrder			= URL::createLink('phone', 'user', 'order', array('phone_id' => $phoneInfo['id'], 'price' => $priceReal));
	
    $linkRelatePhone	= URL::createLink('phone', 'phone', 'relate', array('phone_id' => $phoneInfo['id'], 'category_phone_id' => $phoneInfo['category_phone_id']));
?>










<!-- START MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                            <div class="product-image">
                            <div class="product_img_box">
                                <img id="product_img" src="<?= UPLOAD_URL ?>phone/<?= $picture1 ?>" alt="<?= $name ?>"
                                    data-zoom-image="<?= UPLOAD_URL ?>phone/<?= $picture1 ?>" />
                                <a href="#" class="product_img_zoom custom-zoom" title="Zoom">
                                    <span class="linearicons-zoom-in"></span>
                                </a>
                            </div>
                                <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                                    <div class="item">
                                        <a href="#" class="product_gallery_item active" data-image="<?php echo $file_product  ?>" data-zoom-image="<?php echo $file_product  ?>">
									
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="pr_detail">
                                <div class="product_description">
                                    <h4 class="product_title"><a href="#"><?php echo $name;?></a></h4>
                                    <div class="product_price">
                                        <span class="price"><?php  echo $saleOff;  ?></span>
                                        <del><?php  echo $price;  ?></del>
                                        <!-- <div class="on_sale">
                                            <span>Tiết kiệm: 35%</span>
                                        </div> -->
                                    </div>
                                    <div class="pr_desc">
                                        <p><?php echo $description;?></p>
                                    </div>
                                    <div class="product_sort_info">
                                        <ul>
                                            <li><i class="flaticon-shipped custom-icon-top"></i>Thời gian giao hàng ước tính sẽ dao động trong khoảng 3-7 ngày làm việc, tùy thuộc vào địa chỉ giao hàng.</li>
                                            <li><i class="linearicons-sync"></i> Thời hạn trả hàng MIỄN PHÍ cho đơn hàng quý khách là 30 ngày kể từ ngày quý khách nhận được email xác nhận giao hàng.</li>
                                            <!-- <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li> -->
                                        </ul>
                                    </div>
                                    <div class="pr_switch_wrap">
                                        <!-- <span class="switch_lable">Size</span>
                                        <div class="product_size_switch">
                                            <span>xs</span>
                                            <span>s</span>
                                            <span>m</span>
                                            <span>l</span>
                                            <span>xl</span>
                                        </div> -->
                                    </div>
                                </div>
                                <hr />
                                <div class="cart_extra">
                                    <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" name="num" value="1" title="Qty" class="qty" size="4" onchange="fixCartNum()">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                    </div>
                                    <div class="cart_btn">
                                        <button class="btn btn-fill-out btn-addtocart" type="button" onclick="addCart(<?=$id?>, $('[name=num]').val())" ><i class="icon-basket-loaded"></i>Chọn mua</button>
                                        <!-- <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                        <a class="add_wishlist" href="#"><i class="icon-heart"></i></a> -->
                                    </div>
                                </div>
                                <hr />
                                <div class="product_share">
                                    <span>Chia sẻ:</span>
                                    <ul class="social_icons js_share">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="large_divider clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-style3">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Miêu tả</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Thông tin chi tiết</a>
                                    </li> -->
                                </ul>
                                <div class="tab-content shop_info_tab">
                                    <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                        <p><?php echo $description;?></p>
                                        <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p> -->
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Thương hiệu</td>
                                                <td>Canifa</td>
                                            </tr>
                                            <tr>
                                                <td>Xuất xứ thương hiệu</td>
                                                <td>Việt Nam</td>
                                            </tr>
                                            <tr>
                                                <td>Xuất xứ</td>
                                                <td>Việt Nam</td>
                                            </tr>
                                            <tr>
                                                <td>Màu sắc</td>
                                                <td>Đen, nâu, xám</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td> s, m, l, xl, </td>
                                            </tr>
                                            <tr>
                                                <td>Chất liệu</td>
                                                <td>100% cotton.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="small_divider"></div>
                            <div class="divider"></div>
                            <div class="medium_divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="heading_s1">
                                <h3>Sản phẩm tương tự</h3>
                            </div>
                            <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "992":{"items": "2"}, "1199":{"items": "3"}}'>
                               
							<?php
                echo $xhtmlRelatePhone;

                                ?>
                                   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-4 pt-2 mt-lg-0 pt-lg-0">
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

    