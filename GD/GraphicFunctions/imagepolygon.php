<?php 
header("Content-Type: image/jpeg");
$image = imagecreate(200 , 200);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
$points = array(
	10,10,
	20,20,
	20,40,
	10,60
);
imagepolygon($image , $points , 4 , $red);
imagejpeg($image);
imagedestroy($image);