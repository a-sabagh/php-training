<?php 
header("Content-Type: image/jpeg");
$image = imagecreate(200 , 200);
$white = imagecolorallocate($image , 255 , 255 , 255);
$blue = imagecolorallocate($image , 0 , 0 , 255);
imagesetpixel($image , 100 , 100 , $blue);
imagejpeg($image);
imagedestroy($image);