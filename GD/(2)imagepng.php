<?php
$image = imagecreate(200,200);
$alphayellow = imagecolorallocatealpha($image , 255 , 255 , 0 , 35);
imagepng($image , "images/alphayellow.png" , 5);
imagedestroy($image);
