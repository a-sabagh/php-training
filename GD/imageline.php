<?php
header("Content-Type: image/jpeg");
$image = imagecreate(200 , 200);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
imageline($image , 10 , 10 , 190 , 190 , $red);
imagejpeg($image);
imagedestroy($image);