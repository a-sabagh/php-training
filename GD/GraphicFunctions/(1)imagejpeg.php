<?php
header("Content-Type: image/jpeg");
$image = imagecreate(200,200);
$alphayellow = imagecolorallocatealpha($image , 255 , 255 , 0 , 90);
imagejpeg($image);
imagedestroy($image);