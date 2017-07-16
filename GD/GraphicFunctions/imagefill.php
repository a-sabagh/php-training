<?php
header("Content-Type: image/jpeg");
$image = imagecreate( 200 , 200 );
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
$blue = imagecolorallocate($image , 0 , 0 , 255);
$green = imagecolorallocate($image , 0 , 255 , 0);
$yellow = imagecolorallocate($image , 255 , 255 , 0);
imageellipse($image , 80 , 80 , 80 , 80 , $red);
imageellipse($image , 120 , 80 , 80 , 80 , $red);
imagefill($image , 70 , 80 , $green);
imagefill($image , 100 , 80 , $blue);
imagefill($image , 130 , 80 , $yellow);
imagejpeg($image);
imagedestroy($image);