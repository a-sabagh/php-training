<?php
$thumb_width = 300;
$thumb_height = 180;
$image_thumb = imagecreatetruecolor($thumb_width,$thumb_height);
$image_full = imagecreatefromjpeg("full/glass-fruits.jpg");
$image_full_width = imagesx($image_full);
$image_full_height = imagesy($image_full);
$ratio = $image_full_width/$image_full_height;
$image_cp_width = $thumb_width;
$image_cp_height = $thumb_width/$ratio;

imagecopyresampled($image_thumb , $image_full , 0 , 0 , 0 , 0 , $image_cp_width , $image_cp_height , $image_full_width , $image_full_height );

$result_png = imagepng($image_thumb , "thumbnail/thumb-300x180.png");
$result_jpg = imagejpeg($image_thumb , "thumbnail/thumb-300x180.jpg");

if($result_jpg){
    echo "<span style='color: greenyellow;'>thumnail created with jpg format</span><br>";
}else{
    echo "<span style='color: orangered;'>error with creating jpg thumbnail</span><br>";
}

if($result_png){
    echo "<span style='color: greenyellow;'>thumnail created with png format</span><br>";
}else{
    echo "<span style='color: orangered;'>error with creating png thumbnail</span><br>";
}