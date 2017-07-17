<?php
header("Content-Type: image/jpeg");
$image = imagecreatefromjpeg("pictures/flower.jpg");
imagejpeg($image);
imagedestroy($image);