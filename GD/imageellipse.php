<?php
header("Content-Type: image/jpeg");
$image = imagecreate(200 , 200);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
imageellipse($image , 100 , 100 , 50 , 70 , $red);
imagejpeg($image);
imagedestroy($image);