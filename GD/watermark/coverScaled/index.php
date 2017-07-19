<?php
$image_dst = imagecreatefromjpeg("inputImages/umbrella.jpg");
$image_src = imagecreatefrompng("inputImages/watermark.png");
$image_dst_width = imagesx($image_dst);
$image_dst_height = imagesy($image_dst);
$image_src_width = imagesx($image_src);
$image_src_height = imagesy($image_src);

imagecopyresampled($image_dst , $image_src , 0 , 0 , 0 , 0 , $image_dst_width , $image_dst_height , $image_src_width , $image_src_height);

$result = imagejpeg($image_dst , "outputWatermark/umbrella.jpg");

if($result){
    echo "<b style='color:greenyellow'>Output OK</b><br>";
}else{
    echo "<b style='color:orangered'>Output ERROR!</b><br>";
}