<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset: utf8\r\n";

$alert = '';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    


    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'techanalyst41@gmail.com';
        $mail->Password = '0706870680';
        $mail->Username = 'techanalyst41@gmail.com';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('techanalyst41@gmail.com');
        $mail->addAddress($email = $_POST['email']);

        $mail->isSMTP(true);
        $mail->Subject = 'Subscription to Carding Guru';
        $mail->Body = 'Welcome to our newsletter, We are glad to have you here.
Support Team.';
        $mail->send();
        $alert = '<div class="alert-success">
                    <span>Successful, Thank you for registering with Carding Guru.</span>
                  </div>';
    } catch(Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                  </div>';
    }
}





















?>
