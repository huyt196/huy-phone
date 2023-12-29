
<!-- START HEADER -->
<?php include_once TEMPLATE_PATH . 'phone/main/html/layout_header.php'; ?>
<!-- END HEADER-->

<!-- START SECTION SLIDER-->
<?php
if ($option['slider'] == true) {
    include_once TEMPLATE_PATH . 'phone/main/widgets/slider.php';
}
if ($option['breadcum'] == true) {
    include_once TEMPLATE_PATH . 'phone/main/widgets/breadcrumb.php';
}



?>

<!-- END SECTION SLIDER -->

<div class="main_content">

    <!-- START SECTION BANNER -->
    <?php
    if ($option['banner'] == true) {
        include_once TEMPLATE_PATH . 'phone/main/widgets/banner.php';
    }
    ?>
    <!-- END SECTION BANNER -->

    <!-- START SECTION phone -->
    <?php require_once MODULE_PATH . $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php'; ?>
    <!-- END SECTION phone -->

    <!-- START SECTION phone INFO -->
    <!-- START SECTION phone INFO -->

    <?php if ($option['info'] == true) {
        echo '<div class="section-info  bg_light_blue2 ' . $this->info_page . '">';
        include_once TEMPLATE_PATH . 'phone/main/widgets/info.php';
    }
    echo ' </div>';
    ?>

    <!-- END SECTION phone INFO -->


    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <?php include_once TEMPLATE_PATH . 'phone/main/widgets/subscribe.php'; ?>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->

<!-- START FOOTER-->
<?php include_once TEMPLATE_PATH . 'phone/main/html/layout_footer.php'; ?>
<!-- END FOOTER-->

