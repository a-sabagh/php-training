<?php
$image = imagecreate(200,200);
$yellow = imagecolorallocate($image , 255 , 255 , 0);
imagejpeg($image , "images/yellow.jpeg" , 50);
imagedestroy($image);