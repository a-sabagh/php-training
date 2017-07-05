<?php
include_once 'inc/class.phpmailer.php';
$mail = new PHPMailer();
$mail->isHTML(TRUE);
$mail->Subject = 'phpmailer-مثال';
$mail->CharSet = "UTF-8";
$mail->AltBody = "You can't See Example";
$mail->Body = "First <b>Email</b> with smtp class";
$mail->setFrom('rangraz54@gmail.com', 'Abolfazl Sabagh');
$mail->addReplyTo("info@asabagh.ir");
$mail->addAddress("a.sabagh72@gmail.com");
$result = $mail->send();
if(!$result){
    echo "Mailer Error" . $mail->ErrorInfo;
}else{
    echo "Massege was send";
}