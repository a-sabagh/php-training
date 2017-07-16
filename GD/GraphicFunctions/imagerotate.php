<?php
header("Content-Type: image/png");
$image = imagecreate(200 , 200);
$transparent = imagecolorallocatealpha($image , 255 , 255 , 255 , 127);
$red = imagecolorallocate($image , 255 , 0 , 0);
$blue = imagecolorallocate($image , 0 , 0 , 255);
imagerectangle($image , 20 , 20 , 100 , 80 , $red);
$image_rotate = imagerotate($image , 45 , $blue);
imagepng($image_rotate);
imagedestroy($image);