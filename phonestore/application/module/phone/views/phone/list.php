<?php

// SELECT BOX SORT
$arraySort = [
    'default' => 'Sắp xếp',
    'popularity' => 'Xem nhiều nhất',
    'date' => 'Mới nhất',
    'price' => 'Giá: thấp đến cao',
    'price-desc' => 'Giá : cao đến thấp'
];
$selectboxSort = HelperFrontend::cmsSelectbox('filter_order', 'form-control form-control-sm', $arraySort, $this->arrParam['filter_order']);

// SELECT BOX SHOWING NUMBER ITEM
$arrayShowingNumberItem = [
    'default' => 'Hiển thị',
    '6' => 6,
    '9' => 9,
    '12' => 12,
    '18' => 18,
];
$selectboxShowing = HelperFrontend::cmsSelectbox('filter_showing', 'form-control form-control-sm', $arrayShowingNumberItem, $this->arrParam['filter_showing']);


$paginationHTML = $this->pagination->showPagination(URL::createLink('phone', 'phone', 'list'), ['phone' => true]);

$xhtml = '';
if (!empty($this->Items)) {


    foreach ($this->Items as $key => $value) {
        $name = $value['name'];
        $saleOff = number_format($value['sale_off']);
        $phoneID = $value['id'];
        $catID = $value['category_phone_id'];
        $price = $value['price'];
        $phoneNameURL = URL::filterURL($name);
        $catNameURL = URL::filterURL($this->categoryName);
        $linkzoom	= URL::createLink('phone', 'phone', 'quickView', array('phone_id' => $value['id']));
        $link = URL::createLink('phone', 'phone', 'detail', array('category_phone_id' => $value['category_phone_id'], 'phone_id' => $value['id']), "$catNameURL/$phoneNameURL-$catID-$phoneID.html");

        $description = substr($value['description'], 0, 200);

        $picture = Helper::createImage('phone', '', $value['picture']);

        $xhtml .= '<div class="col-md-4 col-6">
			<div class="product">
				<div class="product_img">
					<a href="shop-product-detail.html">
					' . $picture . '
					</a>
					<div class="product_action_box">
						<ul class="list_none pr_action_btn">
							<li class="add-to-cart"><a href="#" onclick="addCart('. $phoneID .', 1)" ><i class="icon-basket-loaded"></i> Chọn Mua</a></li>
							<li><a href="'.$linkzoom.'" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
					
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
					<div class="list_product_action_box">
						<ul class="list_none pr_action_btn">
							<li class="add-to-cart"><a href="' . $link . '"><i class="icon-basket-loaded"></i> Chọn mua</a></li>
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
                <form method="post" action="" id="adminForm">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_left">
                                    <div class="custom_select">
                                        <!-- <select class="form-control form-control-sm" name="filter_order">
                                            <option value="order">Sắp xếp</option>
                                            <option value="popularity">Xem nhiều nhất</option>
                                            <option value="date">Mới nhất</option>
                                            <option value="price">Giá: thấp đến cao</option>
                                            <option value="price-desc">Giá : cao đến thấp</option>
                                        </select> -->

                                        <?php echo $selectboxSort; ?>
                                    </div>
                                </div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:Void(0);" class="shorting_icon grid active"><i
                                                class="ti-view-grid"></i></a>
                                        <a href="javascript:Void(0);" class="shorting_icon list"><i
                                                class="ti-layout-list-thumb"></i></a>
                                    </div>
                                    <div class="custom_select">
                                        <?php echo $selectboxShowing; ?>
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
                    <?php include_once TEMPLATE_PATH . 'phone/main/widgets/panigation.php'; ?>
                    <!-- END PANIGATION -->

                    <div>
                        <input type="hidden" name="filter_column" value="name">
                        <input type="hidden" name="filter_page" value="1">
                        <input type="hidden" name="filter_column_dir" value="asc">
                    </div>
                </form>
            </div>
            <div class="col-lg-3 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="sidebar">
                    <?php include_once BLOCK_PATH . 'sidebar-categories.php'; ?>
                    <?php include_once TEMPLATE_PATH . 'phone/main/widgets/sidebar-filter.php'; ?>


                    <?php include_once BLOCK_PATH . 'sidebar-banner.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->