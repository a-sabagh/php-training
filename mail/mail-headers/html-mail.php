<?php
$to = "a.sabagh72@gmail.com";
$subject = "HTMLcourseExample";
$body = "<b>hello</b> world<hr>send mail with mail function";
$headers = "From: Abolfazl Sabagh <info@asabagh.ir>" . "\r\n"
        . "MIME-Version: 1.0" . "\r\n"
        . "Content-type: text/html;charset=UTF-8" . "\r\n";

$result = mail($to,$subject,$body,$headers);

if($result){
    echo "the Email was be sended";
}else{
    echo "the Email not send";
}