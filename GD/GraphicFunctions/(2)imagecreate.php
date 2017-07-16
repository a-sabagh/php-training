<?php
header("Content-Type: image/png");
$image = imagecreate(200 , 200);
$yellow = imagecolorallocate($image , 255 , 255 , 0);
imagepng($image);
imagedestroy($image);