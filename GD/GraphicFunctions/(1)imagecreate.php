<?php
$image = imagecreate(200 , 200);
$yellow = imagecolorallocate($image , 255 , 255 , 0);
imagepng($image , "images/yellow.png");
imagedestroy($image);