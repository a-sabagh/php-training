<?php
$image_thumb_width = 400;
$image_thumb_height = 300;
$image_thumb = imagecreatetruecolor($image_thumb_width,$image_thumb_height);
$image_full = imagecreatefromjpeg("full/dolphin.jpg");
$image_full_width = imagesx($image_full);
$image_full_height = imagesy($image_full);

imagecopyresampled($image_thumb , $image_full , 0 , 0 , 0 , 0 , $image_thumb_width , $image_thumb_height , $image_full_width , $image_full_height);

$result_png = imagepng($image_thumb , "thumbnail/thumb-400x300.png");
$result_jpg = imagejpeg($image_thumb , "thumbnail/thumb-400x300.jpg");

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