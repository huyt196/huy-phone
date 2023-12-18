<?php 
    $name_page="Đăng nhập";
    $breadcrumb = ' <li class="breadcrumb-item"><a href="#">'.$name_page.'</a></li>';
    $menu_active="login";
?>
<!-- START HEADER -->
<?php include_once '../html/layout_header.php';?>
<!-- END HEADER-->
<!-- START SECTION BREADCRUMB -->
<?php include_once '../widgets/breadcrumb.php';?>
<!-- END SECTION BREADCRUMB -->
<!-- START MAIN CONTENT -->
<div class="main_content">
    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Đăng nhập</h3>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Mật khẩu">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Nhớ mật khẩu</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Quên mật khẩu?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="login">Đăng nhập</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Bạn chưa có tài khoản? <a href="register.php">Tạo tài khoản mới</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <?php include_once '../widgets/subscribe.php';?>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->
<!-- START FOOTER-->
<?php include_once '../html/layout_footer.php';?>
<!-- END FOOTER-->