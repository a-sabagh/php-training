<?php
header("Content-Type: image/png");
$image = imagecreate(200,200);
$alphayellow = imagecolorallocatealpha($image , 255 , 255 , 0 , 35);
imagepng($image);
imagedestroy($image);
