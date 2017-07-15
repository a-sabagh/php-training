<?php
header("Content-Type: image/jpeg");
$image = imagecreate(200,200);
$yellow = imagecolorallocate($image , 255 , 255 , 0);
imagegif($image);
