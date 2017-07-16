<?php
$image = imagecreate(200 , 200);
$white = imagecolorallocate($image , 255 , 255 ,255);
$blue = imagecolorallocatealpha($image , 28 , 134 , 55 , 50);
imagefilledrectangle($image , 20 , 20 , 80 , 60 , $blue);
$rgb = imagecolorat($image , 20 , 20);
$color_index = imagecolorsforindex($image , $rgb);
echo '<pre>';
var_dump($color_index);
echo '</pre>';
imagedestroy($image);