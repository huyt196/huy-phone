<?php
// require_once 'libs/Mail.php';
// require_once 'libs/Validate.php';

$result = [];
if (isset($this->result) && !empty($this->result)) {
    $result = $this->result;
}
if (isset($this->messageSendMail) && !empty($this->messageSendMail)) {
    if ($this->messageSendMail) {
        $result = [];
        $message = '<p class="text-success">Cám ơn bạn đã gửi mail. Chúng tôi sẽ liên hệ trong thời gian sớm nhất khi có thể!</p>';
    } else {
        $message = '<p class="text-danger">Vui lòng kiểm tra lại địa chỉ email của bạn </p>';
    }

}

?>

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
                        <p>372/25D Đ. Cách Mạng Tháng 8 ,Phường 10, Quận 3, Thành phố Hồ Chí Minh</p>
                        <p>
                            <?php //echo $address; ?>
                        </p>
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

                            <p>nquanghuy1962@gmail.com</p>
                        </a>
                        <!--                        <a href="mailto:info@sitename.com">-->
                        <!--                            -->
                        <?php //echo $email; ?>
                        <!--                            <p>-->
                        <?php //echo $email; ?><!--</p>-->
                        <!--                        </a>-->
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

                        <p>037.951.1465</p>
                        <!--                        <span>Hotline</span>-->
                        <!--                        -->
                        <?php //echo $phone; ?>
                        <!--                        <p>-->
                        <?php //echo $phone; ?><!--</p>-->
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
                <?php
                if (isset($message)) {
                    echo $message;
                } else {
                    echo '<p class="leads">Quý khách gửi thông tin liên hệ cho chúng tôi. Chúng tôi sẽ phản hồi sớm nhất khi có
                        thể.</p>';
                }

                ?>
                <p>
                    <?php if (isset($this->error))
                        echo $this->error; ?>
                </p>
                <div class="field_form">
                    <form action="" method="post" name="enq">
                        <div class="row">
                            <?php echo $errors ?>
                            <div class="form-group col-md-6">
                                <input required placeholder="Họ và tên " value="<?php echo $result['fullname'] ?? '' ?>"
                                    id="name" class="form-control" name="form[fullname]" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input required placeholder="Email" value="<?php echo $result['email'] ?? '' ?>"
                                    id="email" name="form[email]" class="form-control" type="email">
                            </div>
                            <div class="form-group col-md-6">
                                <input required placeholder="Số điện thoại" value="<?php echo $result['phone'] ?? '' ?>"
                                    id="phone" class="form-control" name="form[phone]">
                            </div>
                            <div class="form-group col-md-6">
                                <input placeholder="Tiêu đề" type="text" id="title"
                                    value="<?php echo $result['title'] ?? '' ?>" class="form-control"
                                    name="form[title]">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea required placeholder="Nội dung" id="content" name="form[content]"
                                    class="form-control" name="message"
                                    rows="4"><?php echo $result['content'] ?? '' ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-fill-out">Gửi
                                </button>
                            </div>
                            <div class="col-md-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                <div id="map" class="contact_map2" data-zoom="12" data-latitude="10.7856028"
                    data-longitude="106.6924606" data-icon="../assets/images/marker.png"></div>
                <!--                <div id="map" class="contact_map2" data-zoom="12" data-latitude="-->
                <?php //echo $kd_google_map; ?><!--"-->
                <!--                     data-longitude="-->
                <?php //echo $vd_google_map; ?><!--" data-icon="../assets/images/marker.png"></div>-->
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CONTACT -->