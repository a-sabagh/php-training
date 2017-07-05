<?php
require('inc/class.phpmailer.php');
require('inc/class.smtp.php');
$mail = new PHPMailer(TRUE);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Username = 'a.sabagh72@gmail.com';
$mail->Password = 'sabagh72';
$mail->Subject = 'Gmailphpmailer-courseExample';
$mail->Body = "First email with smtp class Local from Gmail";
$mail->setFrom('weblizer@gmail.com', 'Abolfazl Sabagh');
$mail->addAddress("info@asabagh.ir" , "Abolfazl Sabagh");

try {
    $mail->send();
    echo "successfull";
} catch (phpmailerException $ex) {
    echo $ex->errorMessage();
}
//SMTP Error: Could not authenticate.