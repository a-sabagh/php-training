<?php
$to = "a.sabagh72@gmail.com";
$subject = "Bcc-courseExample";
$body = "<b>hello</b> world<hr>this email was sended to you and copy of this to me";
$headers = "From: Abolfazl Sabagh <info@asabagh.ir>" . "\r\n"
        . "Cc: info@asabagh.ir" . "\r\n"
        . "Bcc: rangraz54@gmail.com" . "\r\n"
        . "MIME-Version: 1.0" . "\r\n"
        . "Content-type: text/html;charset=UTF-8" . "\r\n";

$result = mail($to,$subject,$body,$headers);

if($result){
    echo "the Email was be sended";
}else{
    echo "the Email not send";
}