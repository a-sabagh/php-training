<?php
header("Content-Type: image/jpeg");
$characters = "1234567890";
$shuffle_chars = str_shuffle($characters);
$captcha_text = substr($shuffle_chars , 0 , 4);
$image = imagecreate(70 , 30);
$white = imagecolorallocate($image , 255 , 255 , 255);
$blue = imagecolorallocate($image , 0 , 0 , 255);

imagestring($image , 5 , 19 , 7 , $captcha_text , $blue );

imagejpeg($image);
imagedestroy($image);