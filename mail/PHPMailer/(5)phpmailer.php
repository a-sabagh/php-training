<?php
include_once 'inc/class.phpmailer.php';
$mail = new PHPMailer();
$mail->isHTML(TRUE);
$mail->Subject = 'phpmailerAttachment-courseExample';
$mail->CharSet = "UTF-8";
$mail->AltBody = "You can't See Example";
$mail->Body = "First <b>Email</b> with smtp class with attachment";
$mail->setFrom('rangraz54@gmail.com', 'Abolfazl Sabagh');
$mail->addReplyTo("info@asabagh.ir");
$mail->addAddress("a.sabagh72@gmail.com");
$mail->addAttachment("gmail-icon.png", "gmail");
$result = $mail->send();
if(!$result){
    echo "Mailer Error" . $mail->ErrorInfo;
}else{
    echo "Massege was send";
}