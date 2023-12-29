
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
                            <a class="nav-link nav_item <?php if($menu_active=="home") echo "active"; ?>" href="home.html">Trang chủ</a>
                        </li>
                        <li>
                            <a class="nav-link nav_item <?php if($menu_active=="about") echo "active"; ?>" href="about.html">Giới thiệu</a>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link <?php if($menu_active=="listproduct") echo "active"; ?>" href="#" data-toggle="dropdown">Điện Thoại</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Các mẫu điện thoại</li>
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
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Phụ kiện</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-12">
                                        <ul class="d-lg-flex">
                                            <li class="mega-menu-col col-lg-3">
                                            <div style="text-align:center" class="loading"></div>
                                                <!-- <ul>
                                                    <li class="dropdown-header">Phụ Kiện Nữ</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="list-product.php">Ba lô</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="list-product.php">Túi xách </a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="list-product.php">Thắt lưng</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="list-product.php">Phụ kiện khác</a></li>
                                                </ul> -->
                                            </li>
                                          
                                        
                                          
                                        </ul>
                                    </li>
                                    <!-- <li class="mega-menu-col col-lg-3">
                                        <div class="header_banner">
                                            <div class="header_banner_content">
                                                <div class="shop_banner">
                                                    <div class="banner_img overlay_bg_40">
                                                        <img src="<?=TEMPLATE_URL?>phone/main/assets/images/phukien.jpg" alt="shop_banner"/>
                                                    </div>
                                                    <div class="shop_bn_content">
                                                        <h5 class="text-uppercase shop_subtitle">Bộ sưu tập mới</h5>
                                                        <h3 class="text-uppercase shop_title">Giảm tới 30%</h3>
                                                        <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Xem ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link nav_item <?php if($menu_active=="listarticle"||$menu_active=="detail-article") echo "active"; ?>" href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a class="nav-link nav_item <?php if($menu_active=="about") echo "active"; ?>" href="faq.html">FAQ</a>
                        </li>
                        <li><a class="nav-link nav_item <?php if($menu_active=="contact") echo "active"; ?>" href="contact.html">Liên hệ</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li>
                        <a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Nhập sản phẩm bạn cần mua" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown">
                        <a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <?php
                                    for($i=0;$i<2;$i++){
                                        include '../element/item-cart-box.php';
                                    }
                                ?>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Thành tiền:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>1.400.000đ</p>
                                <p class="cart_buttons"><a href="cart.php" class="btn btn-fill-line rounded-0 view-cart">Giỏ hàng</a><a href="checkout.php" class="btn btn-fill-out rounded-0 checkout">Đặt hàng</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>