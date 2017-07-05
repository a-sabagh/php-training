<?php
include_once 'inc/class.phpmailer.php';
include_once 'inc/class.smtp.php';
$mail = new PHPMailer(TRUE);
$mail->isSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Host = 'server1.ariazdevs.com';
$mail->Port = 465;
$mail->Username = 'info@asabagh.ir';
$mail->Password = 's*bgqDPc(.$L';
$mail->Subject = 'Localphpmailer-courseExample';
$mail->Body = "<span style='color:red;'>First</span> Email with smtp class";
$mail->isHTML(TRUE);
$mail->setFrom('info@asabagh.ir', 'Abolfazl Sabagh');
$mail->addAddress("a.sabagh72@gmail.com");

try {
    $mail->send();
    echo "Message was send";
} catch (phpmailerException $ex) {
    $ex->errorMessage();
}