<?php
header("Content-Type: image/jpg");
$characters = "qwertyuiopasdfghjklzxcvbnm";
$characters .= "1234567890";
$shuffle_chars = str_shuffle($characters);
$image = imagecreate(100,50);
$color = imagecolorallocate($image , rand(0,255) , rand(0,255) , rand(0,255));
$filename = "images/" . rand(1,5) . ".gif";
$image_bg = imagecreatefromgif($filename);
imagecopy($image , $image_bg , 0 , 0 , 0 , 0 , 100 , 50);


$font_size = 17;
$font = "fonts/" . rand(1,5) . ".ttf";
$coordinates_x = 0;
$coordinates_y = 0;
for($i=0;$i<5;$i++){
    $text = substr($shuffle_chars , rand(0 , strlen($shuffle_chars)) , 1);
    $angle = rand(0,50);
    $coordinates_x = $coordinates_x + 15;
    $coordinates_y = 30;
    imagettftext($image , $font_size , $angle , $coordinates_x , $coordinates_y , $color , $font , $text);
}

imagejpeg($image);
imagedestroy($image);