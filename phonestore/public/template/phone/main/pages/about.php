<?php
    //active menu
    $name_page="Giới thiệu";
    // BREADCRUMB
    $breadcrumb = '<li class="breadcrumb-item active">'.$name_page.'</li>';
    $menu_active="about";
?>
<!-- START HEADER -->
<?php include_once '../html/layout_header.php';?>
<!-- END HEADER-->
<!-- START SECTION BREADCRUMB -->
<?php include_once '../widgets/breadcrumb.php';?>
<!-- END SECTION BREADCRUMB -->
<!-- START MAIN CONTENT -->
<div class="main_content">
    <!-- STAT SECTION ABOUT --> 
    <div class="section-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img scene mb-4 mb-lg-0">
                        <img src="../assets/images/about_img.jpg" alt="about_img"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading_s1">
                        <h2>Về Fstyle</h2>
                    </div>
                    <p>Như ý nghĩa của tên gọi, trang phục của Fstyle hướng đến việc trở thành thói quen, lựa chọn hàng ngày trong mọi tình huống. Bởi Fstyle hiểu rằng, sự tự tin về phong cách ăn mặc sẽ làm nền tảng, tạo động lực cổ vũ mỗi người mạnh dạn theo đuổi những điều mình mong muốn.</p>
                    <p>Fstyle luôn nỗ lực không ngừng trong việc đa dạng hoá dòng sản phẩm để phục vụ nhu cầu ngày càng cao của khách hàng. Bởi vậy, chúng tôi luôn tìm cách đa dạng hóa mẫu mã và sản phẩm để đem đến cho khách hàng sự lựa chọn tốt nhất và phù hợp nhất.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading_s1">
                        <h2>Tiêu chuẩn chất lượng</h2>
                    </div>
                    <p>Để mang tới bạn những sản phẩm an toàn và chất lượng, Fstyle thiết lập hệ thống tiêu chuẩn chất lượng riêng cho các sản phẩm may mặc dựa trên các tiêu chuẩn của Việt Nam và trên thế giới. </p>
                    <p>Chúng tôi có đội ngũ chuyên gia cùng với quy trình kiểm định chất lượng sản phẩm từ các nhà cung cấp để đảm bảo những sản phẩm tới tay khách hàng là những sản phẩm với chất lượng tốt nhất. </p>
                </div>
                <div class="col-lg-6">
                    <div class="about_img scene mb-4 mb-lg-0">
                        <img src="../assets/images/about_img.jpg" alt="about_img"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION ABOUT --> 
    <!-- START SECTION SHOP INFO -->
    <div class="section-info  bg_light_blue2 info-about">
        <?php include_once '../widgets/info.php';?>
    </div>
    <!-- END SECTION SHOP INFO -->
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <?php include_once '../widgets/subscribe.php';?>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->
<!-- START FOOTER-->
<?php include_once '../html/layout_footer.php';?>
<!-- END FOOTER-->