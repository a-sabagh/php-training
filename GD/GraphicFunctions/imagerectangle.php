<?php
header("Content-Type: image/jpeg");
$image = imagecreate(200 , 200);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
imagerectangle($image , 30 , 30 , 170 , 170 , $red);
imagejpeg($image);
imagedestroy($image);