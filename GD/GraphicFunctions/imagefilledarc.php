<?php 
header("Content-Type: image/jpeg");
$image = imagecreate(200 , 200);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
imagefilledarc($image , 10 , 10 , 30 , 30 , 0 , 90 , $red , 1 );
imagefilledarc($image , 50 , 10 , 30 , 30 , 0 , 120 , $red , 2);
imagefilledarc($image , 50 , 10 , 30 , 30 , 0 , 120 , $red , 3);
imagefilledarc($image , 100 , 100 , 50 , 50 , 0 , 180 , $red , 4);
imagejpeg($image);
imagedestroy($image);