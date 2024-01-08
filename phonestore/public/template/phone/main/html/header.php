<?php

	$model 	= new Model();
	$query	="SELECT `id`, `name`, `picture` FROM `".TBL_CATEGORYPHONE."` WHERE `status`  = 1 ORDER BY `id` ASC";
    $data	= $model->fetchAll($query);
   


    $link	 		= URL::createLink('phone', 'phone', 'list', array('category_id' => $id), "$nameURL-$id.html");
    $linkHome		= URL::createLink('phone', 'phone', 'index', null, 'home.html');
    $linkAbout		= URL::createLink('phone', 'phone', 'index', null, 'about.html');
    $linkSearch		= URL::createLink('phone', 'phone', 'search', null, 'search.html');

?>

<header class="header_wrap fixed-top header_with_topbar">
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="home.html">
                <!-- <img class="logo_light" src="phone/main/assets/images/logo_light.png" alt="logo" /> -->
                <img class="logo_dark" src="<?=TEMPLATE_URL?>phone/main/assets/images/logo-header3.png" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link nav_item <?php if ($this->menu_active == "home"){echo "active";}?>"  href="<?php echo $linkHome ?>">Trang chủ</a>
                        </li>
                        <li>
                            <a class="nav-link nav_item <?php if ($this->menu_active == "about"){echo "active";}?>" href="<?php echo $linkAbout  ?>">Giới thiệu</a>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link      
                             <?php if ($this->menu_active == "list" &&  $this->Items['0']['category_phone_id'] <= 2){echo "active";}
                              elseif( $this->phoneInfo['category_phone_id'] <= 2 && !empty($this->phoneRelate)){echo "active";} else{ }?>" href="#" data-toggle="dropdown">Điện Thoại</a>
                            <div class="dropdown-menu menu-dropdown-1">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <!-- <li class="dropdown-header">Các mẫu điện thoại</li> -->
                                            <?php include_once BLOCK_PATH . 'categoryphone.php';?>
                                        </ul>
                                    </li>
                   
                                </ul>
                                <!-- <div class="d-lg-flex menu_banners">
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="<?=TEMPLATE_URL?>phone/main/assets/images/menu_banner1.jpg" alt="menu_banner1">
                                            <div class="banne_info">
                                                <h6>Giảm tới 10%</h6>
                                                <h4>Sản phẩm mới</h4>
                                                <a href="#">Sản phẩm mới</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="<?=TEMPLATE_URL?>phone/main/assets/images/menu_banner2.jpg" alt="menu_banner2">
                                            <div class="banne_info">
                                                <h6>Giảm tới 15%</h6>
                                                <h4>Sản phẩm mới</h4>
                                                <a href="#">Xem ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="<?=TEMPLATE_URL?>phone/main/assets/images/menu_banner3.jpg" alt="menu_banner3">
                                            <div class="banne_info">
                                                <h6>Giảm tới 23%</h6>
                                                <h4>Sản phẩm mới</h4>
                                                <a href="#">Sản phẩm mới</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a  class="dropdown-toggle nav-link <?php if ($this->menu_active == "list" &&  $this->Items['0']['category_phone_id'] >= 3){echo "active";}
                              elseif( $this->phoneInfo['category_phone_id'] >= 3 && !empty($this->phoneRelate)){echo "active";} else{ }?>" href="#" data-toggle="dropdown">Phụ kiện</a>
                            <div class="dropdown-menu menu-dropdown-2">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-12">
                                        <ul class="d-lg-flex">
                                            <li class="mega-menu-col col-lg-3">
                                      
                                                <ul>
                                         
                                                    <?php include_once BLOCK_PATH . 'categoryphone2.php';?>
                
                                                </ul>
                                            </li>
                                          
                                        
                                          
                                        </ul>
                                    </li>
                               
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link nav_item <?php if ($this->menu_active == "blog"){echo "active";}?>" href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a class="nav-link nav_item <?php if ($this->menu_active == "faq"){echo "active";}?>" href="faq.html">FAQ</a>
                        </li>
                        <li><a class="nav-link nav_item <?php if ($this->menu_active == "contact"){echo "active";}?>" href="contact.html">Liên hệ</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li>
                        <a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form method="post" action="<?=$linkSearch?>">
                                <input type="text" placeholder="Nhập sản phẩm bạn cần mua" class="form-control" id="search_input" name="filter_search">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown">
                        <a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i
                                class="linearicons-cart"></i><span class="cart_count">
                                <?=$count?>
                            </span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <?php
include MODULE_PATH . "phone/views/cart/list.php";
?>
                            </ul>

                            <?php
include MODULE_PATH . "phone/views/cart/cart-footer.php";
?>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>