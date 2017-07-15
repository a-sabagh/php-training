<?php
include_once 'inc/class.phpmailer.php';
$mail = new PHPMailer();
$mail->Subject = 'phpmailer-courseExample';
$mail->Body = "First <b>Email</b> with smtp class";
$mail->setFrom('rangraz54@gmail.com', 'Abolfazl Sabagh');
$mail->addReplyTo("info@asabagh.ir");
$mail->addAddress("a.sabagh72@gmail.com");
$mail->isHTML(TRUE);
$result = $mail->send();
if(!$result){
    echo "Mailer Error" . $mail->ErrorInfo;
}else{
    echo "Massege was send";
}