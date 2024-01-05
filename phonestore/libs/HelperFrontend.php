<?php
class HelperFrontend
{


	// Create product home
	public static function createHTMLProductHome($arrayProducts)
	{
		$xhtmlProduct = '';
		foreach ($arrayProducts as $key => $value) {
			$id = $value['id'];
			$phoneID =$value['id'];
			$name = $value['name'];
			$category_phone =   $value['category_phone_id'];
			$phoneNameURL	= URL::filterURL($name);
			$catNameURL		= URL::filterURL($value['category_name']);
			$picture = $value['picture'];
			$description = $value['description'];
			$price = number_format($value['price'], 0, ',', '.');
			$saleOff = number_format($value['sale_off'], 0, ',', '.');
			$linkzoom	= URL::createLink('phone', 'phone', 'quickView', array('phone_id' => $value['id']));
			$link	= URL::createLink('phone', 'phone', 'detail', array('category_phone_id' => $value['category_phone_id'],'phone_id' => $value['id']), "$catNameURL/$phoneNameURL-$category_phone-$phoneID.html");
			$xhtmlProduct .= '<div class="col-lg-3 col-md-4 col-6">
								<div class="product">
									<div class="product_img">
										<a href="'.$link.'">
										<img src="' . UPLOAD_URL . 'phone/' . $picture . '" alt="' . $name . '">
										</a>
										<div class="product_action_box">
											<ul class="list_none pr_action_btn">
												<li class="add-to-cart"><a href="#" onclick="addCart('. $id .', 1)"><i class="icon-basket-loaded"></i>Chọn mua</a></li>
												<li><a href="'.$linkzoom.'" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
												<li><a href="#"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product_info">
										<h6 class="product_title"><a href="'.$link.'">' . $name . '</a></h6>
										<div class="product_price">
											<span class="price">' . $saleOff . 'đ</span>
											<del>' . $price . 'đ</del>
											<!-- <div class="on_sale">
												<span>-35%</span>
											</div> -->
										</div>
										<div class="pr_desc">
											<p>' . $description . '</p>
										</div>
									</div>
								</div>
							</div>';


		}
		return $xhtmlProduct;
	}


	public static function createHTMLProductSpecial($arrayProducts)
	{
		$xhtmlProduct = '';
		foreach ($arrayProducts as $key => $value) {
			$id = $value['id'];
			$name = $value['name'];
			$picture = $value['picture'];
			$description = $value['description'];
			$price = number_format($value['price'], 0, ',', '.');
			$saleOff = number_format($value['sale_off'], 0, ',', '.');

			$xhtmlProduct .= '<div class="item">
								<div class="product">
									<div class="product_img">
										<a href="detail-product-' . $id . '.html">
										<img src="' . UPLOAD_URL . 'product/' . $picture . '" alt="' . $name . '">
										</a>
										<div class="product_action_box">
											<ul class="list_none pr_action_btn">
												<li class="add-to-cart"><a href="#" onclick="addCart('. $id .', 1)"><i class="icon-basket-loaded"></i> Chọn mua</a></li>
												<li><a href="detail-product/quick-view-' . $id . '.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
												<li><a href="#"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product_info">
										<h6 class="product_title"><a href="detail-product-' . $id . '.html">' . $name . '</a></h6>
										<div class="product_price">
											<span class="price">' . $saleOff . 'đ</span>
											<del>' . $price . 'đ</del>
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
		return $xhtmlProduct;
	}

	// Create Selectbox
	public static function cmsSelectbox($name, $class, $arrValue, $keySelect = 'default', $style = null)
	{
		$xhtml = '<select style="' . $style . '" name="' . $name . '" class="' . $class . '" >';
		foreach ($arrValue as $key => $value) {
			if ($key == $keySelect) {
				$xhtml .= '<option selected="selected" value = "' . $key . '">' . $value . '</option>';
			} else {
				$xhtml .= '<option value = "' . $key . '">' . $value . '</option>';
			}
		}
		$xhtml .= '</select>';
		return $xhtml;
	}

	public static function randomString($length = 5){
	
		$arrCharacter = array_merge(range('a','z'), range(0,9));
		$arrCharacter = implode( '', $arrCharacter);
		$arrCharacter = str_shuffle($arrCharacter);
	
		$result		= substr($arrCharacter, 0, $length);
		return $result;
	}
}