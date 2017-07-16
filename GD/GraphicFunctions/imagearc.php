<?php 
header("Content-Type: image/jpeg");
$image = imagecreate(200 , 200);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
imagearc($image , 100 , 100 , 50 , 50 , 0 , 180 , $red);
imagejpeg($image);
imagedestroy($image);