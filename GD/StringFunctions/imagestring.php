<?php
header("Content-Type: image/jpeg");
$image = imagecreate(80 , 40);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
$text = "ItWork!";

imagestring($image , 5 , 10 , 12 , $text , $red);

imagejpeg($image);