<?php
header("Content-Type: image/png");
$image = imagecreate(200 , 200);
$cyan = imagecolorallocate($image , 0 , 255 , 255);
$violet = imagecolorallocate($image , 255 , 0 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
$green = imagecolorallocate($image , 0 , 255 , 0);
$blue = imagecolorallocate($image , 0 , 0 , 255);
imagepng($image);
imagedestroy($image);