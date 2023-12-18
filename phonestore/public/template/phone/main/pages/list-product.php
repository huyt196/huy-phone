<?php 
    $name_page="Thời trang Nữ";
    $breadcrumb = ' <li class="breadcrumb-item"><a href="#">'.$name_page.'</a></li>';
    $menu_active="listproduct";
?>
<!-- START HEADER -->
<?php include_once '../html/layout_header.php';?>
<!-- END HEADER-->
<!-- START SECTION BREADCRUMB -->
<?php include_once '../widgets/breadcrumb.php';?>
<!-- END SECTION BREADCRUMB -->
<!-- START MAIN CONTENT -->
<div class="main_content">
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
                            for($i=0;$i<9;$i++){
                                include '../element/item-product-listproduct.php';
                            }
                            ?>
                    </div>
                    <!-- START PANIGATION  -->
                    <?php include_once '../widgets/panigation.php';?>
                    <!-- END PANIGATION -->
                </div>
                <div class="col-lg-3 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="sidebar">
                        <?php include_once '../widgets/sidebar-categories.php';?>
                        <?php include_once '../widgets/sidebar-filter.php';?>
                        <?php include_once '../widgets/sidebar-brand.php';?>
                        <?php include_once '../widgets/sidebar-size.php';?>
                        <?php include_once '../widgets/sidebar-banner.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <?php include_once '../widgets/subscribe.php';?>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->
<!-- START FOOTER-->
<?php include_once '../html/layout_footer.php';?>
<!-- END FOOTER-->