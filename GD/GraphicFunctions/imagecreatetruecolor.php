<?php
header("Content-Type: image/png");
$image = imagecreatetruecolor(200,200);
$violet = imagecolorallocate($image , 255 , 0 , 255);
imagepng($image);
imagedestroy($image);