<?php
$image_dst = imagecreatefromjpeg("inputImages/umbrella.jpg");
$image_dst_width = imagesx($image_dst);
$image_dst_height = imagesy($image_dst);
$image_wmk = imagecreatefrompng("inputImages/watermark.png");
$transparent = imagecolorallocatealpha($image_wmk , 0 , 0 , 0 , 127);
$image_src = imagerotate($image_wmk , 45 , $transparent);

$image_src_width = imagesx($image_src);
$image_src_height = imagesy($image_src);
$dst_x = ($image_dst_width/2) - ($image_src_width/2);
$dst_y = ($image_dst_height/2) - ($image_src_height/2);
imagecopy($image_dst , $image_src , $dst_x , $dst_y , 0 , 0 , $image_src_width , $image_src_height);
$result = imagejpeg($image_dst , "outputWatermark/umbrella.jpg");
if($result){
    echo "<b style='color:greenyellow'>Output OK</b><br>";
}else{
    echo "<b style='color:orangered'>Output ERROR!</b><br>";
}
