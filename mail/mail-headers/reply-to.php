<?php
$to = "rangraz54@gmail.com";
$subject = "reply to-courseExample";
$body = "<b>hello</b> world<hr>you can reply to a.sabagh72@gmail.com";
$headers = "From: Abolfazl Sabagh <info@asabagh.ir>" . "\r\n"
        . "Reply-To: a.sabagh72@gmail.com" . "\r\n"
        . "MIME-Version: 1.0" . "\r\n"
        . "Content-type: text/html;charset=UTF-8" . "\r\n";

$result = mail($to,$subject,$body,$headers);

if($result){
    echo "the Email was be sended";
}else{
    echo "the Email not send";
}