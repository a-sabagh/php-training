<?php
header("Content-Type: image/png");
$image_src = imagecreatefrompng("pictures/btn-tux.png");
$image_dst = imagecreatefrompng("pictures/marble.png");
$dst_width = imagesx($image_dst); 
$dst_height = imagesy($image_dst); 
$src_width = imagesx($image_src); 
$src_height = imagesy($image_src); 
$dst_cp_width = 200;
$dst_cp_height = 200;
$dst_x = ($dst_width/2) - ($dst_cp_width/2); 
$dst_y = ($dst_height/2) - ($dst_cp_height/2); 
$src_x = 0;
$src_y = 0;
imagecopyresampled($image_dst , $image_src , $dst_x , $dst_y , $src_x , $src_y , $dst_cp_width , $dst_cp_height , $src_width , $src_height);
imagepng($image_dst);

imagedestroy($image_dst);
imagedestroy($image_src);