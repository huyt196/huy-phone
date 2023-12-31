

<?php
require_once 'libs/Mail.class.php';
require_once 'libs/Validate.class.php';

$result = [];
$errors = '';

// if (!empty($_POST)) {
//     $source = $_POST;
//     $validate = new Validate($source);

//     // Rule
//     $validate->addRule('name', 'string', 5, 100)
//         ->addRule('email', 'email')
//         ->addRule('title', 'string', 5, 100)
//         ->addRule('phone', 'string', 5, 100)
//         ->addRule('message', 'string', 5, 100);

//     // Run
//     $validate->run();
//     $errors = $validate->showErrors();
//     $result = $validate->getResult();
    
//     if (empty($errors)) {
      
//         $configEmail = file_get_contents('data/configEmail.json');
//         $configEmail = json_decode($configEmail, true);
//         $mail = new Mail($configEmail);
//         $mail->sendMail($result, ['task' => 'send-mail-to-user']);
//         $mail->sendMail($result, ['task' => 'send-mail-to-admin']);
//     }
// }

?>



    <!-- Go To Top
	============================================= -->


    <?php require_once 'html/script.php' ?>



    <!-- START SECTION CONTACT -->
<div class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading_s1">
                    <h2>Liên hệ</h2>
                </div>
                <p class="leads">Quý khách gửi thông tin liên hệ cho chúng tôi. Chúng tôi sẽ phản hồi sớm nhất khi có
                    thể.</p>
                <div class="field_form">
                    <form action="" method="post" name="enq">
                        <div class="row">
                        <?php echo $errors ?>
                            <div class="form-group col-md-6">
                                <input required placeholder="Họ và tên " value="<?php echo $result['name'] ?? '' ?>" id="name" class="form-control"
                                       name="name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input required placeholder="Email"  value="<?php echo $result['email'] ?? '' ?>" id="email" name="email" class="form-control" 
                                       type="email">
                            </div>
                            <div class="form-group col-md-6">
                                <input required placeholder="Số điện thoại" value="<?php echo $result['phone'] ?? '' ?>"   id="phone" class="form-control"
                                       name="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <input placeholder="Tiêu đề" type="text" id="title" name="title" value="<?php echo $result['title'] ?? '' ?>" class="form-control" name="subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea required placeholder="Nội dung" id="message" name="message" class="form-control"
                                          name="message" rows="4"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-fill-out"
                                        >Gửi
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
                 <div id="map" class="contact_map2" data-zoom="12" data-latitude="10.7856028" data-longitude="106.6924606" data-icon="../assets/images/marker.png"></div>
<!--                <div id="map" class="contact_map2" data-zoom="12" data-latitude="--><?php //echo $kd_google_map; ?><!--"-->
<!--                     data-longitude="--><?php //echo $vd_google_map; ?><!--" data-icon="../assets/images/marker.png"></div>-->
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CONTACT -->