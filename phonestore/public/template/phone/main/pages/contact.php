<?php 
    $name_page="Liên hệ ";
    $breadcrumb = '<li class="breadcrumb-item"><a href="#">'.$name_page.'</a></li>';
    $menu_active="contact";
?>
<!DOCTYPE html>
<!-- START HEADER -->
<?php include_once '../html/layout_header.php';?>
<!-- END HEADER-->
<!-- START SECTION BREADCRUMB -->
<?php include_once '../widgets/breadcrumb.php';?>
<!-- END SECTION BREADCRUMB -->
<!-- START MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION CONTACT -->
    <div class="section pb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span>Địa chỉ</span>
                            <p>62A Phạm Ngọc Thạch, Phường 6, Quận 3, TP. Hồ Chí Minh</p>
                       
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-envelope-open"></i>
                        </div>
                        <div class="contact_text">
                            <span>Email</span>
                            <a href="mailto:info@sitename.com">
                      
                                <p>lthlan54@gmail.com</p>
                            </a>
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-tablet2"></i>
                        </div>
                        <div class="contact_text">
                            <span>Hotline</span>
                     
                            <p>0383.308.983</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION CONTACT -->
    <!-- START SECTION CONTACT -->
    <div class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading_s1">
                        <h2>Liên hệ</h2>
                    </div>
                    <p class="leads">Quý khách gửi thông tin liên hệ cho chúng tôi. Chúng tôi sẽ phản hồi sớm nhất khi có thể.</p>
                    <div class="field_form">
                        <form method="post" name="enq">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input required placeholder="Họ và tên " id="first-name" class="form-control" name="name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input required placeholder="Email" id="email" class="form-control" name="email" type="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input required placeholder="Số điện thoại" id="phone" class="form-control" name="phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <input placeholder="Tiêu đề" id="subject" class="form-control" name="subject">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea required placeholder="Nội dung" id="description" class="form-control" name="message" rows="4"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" title="Submit Your Message!" class="btn btn-fill-out" id="submitButton" name="submit" value="Submit">Gửi</button>
                                </div>
                                <div class="col-md-12">
                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                    <!-- <div id="map" class="contact_map2" data-zoom="12" data-latitude="10.7856028" data-longitude="106.6924606" data-icon="../assets/images/marker.png"></div> -->
                    <div id="map" class="contact_map2" data-zoom="12" data-latitude="<?php echo $kd_google_map; ?>" data-longitude="<?php echo $vd_google_map; ?>" data-icon="../assets/images/marker.png"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION CONTACT -->
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <?php include_once '../widgets/subscribe.php';?>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
</div>
<!-- END MAIN CONTENT -->
<!-- START FOOTER-->
<?php include_once '../html/layout_footer.php';?>
<!-- END FOOTER-->