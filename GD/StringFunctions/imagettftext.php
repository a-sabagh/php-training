<?php
header("Content-Type: image/jpeg");
$image = imagecreate(200 , 100);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
$font_size = 25;
$angle = 20;
$coordinates_x = 60;
$coordinates_y = 70;
$font = "fonts/fuente-dilana.ttf";
$text = "ItWork!";

imagettftext($image , $font_size , $angle , $coordinates_x , $coordinates_y , $red , $font , $text);

imagejpeg($image);