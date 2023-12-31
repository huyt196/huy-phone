<?php
Session::init();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$count = 0;
foreach ($_SESSION['cart'] as $item) {
    $count += $item['num'];
}
//    require_once '../../share/zendvn.php';
//    $email              = $config['email'];
//    $address            = $config['address'];
//    $phone              = $config['phone'];
//    $google_map         = $config['google_map'];
//    $kd_google_map      = $config['kd_google_map'];
//    $vd_google_map      = $config['vd_google_map'];
//    $copyright          = $config['copyright'];
//    $favicon            = $config['favicon'];
//    $facebook           = $config['social']['facebook'];
//    $youtube            = $config['social']['youtube'];
?>
<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from bestwebcreator.com/phonewise/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 19:25:09 GMT -->
    <head>
        <?php include_once TEMPLATE_PATH . 'phone/main/html/head.php';?>
    </head>
    <body>
        <!-- LOADER -->
        <!-- <div class="preloader">
            <div class="lds-ellipsis">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> -->
        <!-- END LOADER -->
        <!-- START HEADER -->
        <?php include_once TEMPLATE_PATH . 'phone/main/html/header.php';?>
        <!-- END HEADER -->