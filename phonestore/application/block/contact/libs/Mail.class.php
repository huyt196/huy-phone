<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Mail
{
    private $mail;

    public function __construct($configEmail)
    {
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.gmail.com';
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = $configEmail['username'];
        $this->mail->Password   = $configEmail['password'];
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port       = 587;
        $this->mail->CharSet = 'UTF-8';

        $this->mail->isHTML(true);
    }

    public function sendMail($arrParam, $options = null)
    {
        $result = true;
        // ....
        if ($options['task'] == 'send-mail-to-admin') {
            try {
                $this->mail->setFrom($arrParam['email'], $arrParam['name']);
                $this->mail->addAddress('nquanghuy1962@gmail.com');
                $this->mail->Subject = $arrParam['title'];
                $this->mail->Body    = $arrParam['message'];
                $this->mail->send();
            } catch (Exception $e) {
                $result = false;
            }
        }

        if ($options['task'] == 'send-mail-to-user') {
            try {
                $this->mail->setFrom('nquanghuy1962@gmail.com', 'QuangHuy');
                $this->mail->addAddress($arrParam['email']);
                $this->mail->Subject = 'Thông báo từ ZendVN';
                $this->mail->Body    = 'Xin chào ' . $arrParam['name'] . ', ZendVN đã nhận được lời nhắn của bạn. Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất. Xin cảm ơn';
                $this->mail->send();
            } catch (Exception $e) {
                $result = false;
            }
        }

        return $result;
    }
}
