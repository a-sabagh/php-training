<?php
$to = "a.sabagh72@gmail.com";
$subject = "courseExample";
$body = "hello world";
$header = "From: info@asabagh.ir";

$result = mail($to,$subject,$body,$header);

if($result){
    echo "the Email was be sended";
}else{
    echo "the Email not send";
}