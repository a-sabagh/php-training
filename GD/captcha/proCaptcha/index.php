<?php 
header("Content-Type: image/jpg");
$characters = "qwertyuiopasdfghjklzxcvbnm";
$characters .= "1234567890";
$shuffle_chars = str_shuffle($characters);
$image = imagecreate(120 , 50);
$white = imagecolorallocate($image , 255 , 255 , 255);
$red = imagecolorallocate($image , 255 , 0 , 0);
$blue = imagecolorallocate($image , 0 , 0 , 255);
$black = imagecolorallocate($image , 0 , 0 , 0);

//60 random pixel
for($i=0;$i<80;$i++){
    imagesetpixel($image , rand(0,120) , rand(0,50) , $red);
}

//10 random line
for($i=0;$i<10;$i++){
    imageline($image , rand(0,120) , rand(0,50) , rand(0,120) , rand(0,50) , $blue);
}

    

$font_size = 20;
$font = "font.ttf";
$coordinates_x = 0;
$coordinates_y = 0;
for($i=0;$i<5;$i++){
    $text = substr($shuffle_chars , rand(0 , strlen($shuffle_chars)) , 1);
    $angle = rand(0,50);
    $coordinates_x = $coordinates_x + 20;
    $coordinates_y = 30;
    imagettftext($image , $font_size , $angle , $coordinates_x , $coordinates_y , $black , $font , $text);
}

imagejpeg($image);
imagedestroy($image);