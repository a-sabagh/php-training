<?php
$image_dest = imagecreatefromjpeg("inputImages/umbrella.jpg");
$image_src = imagecreatefrompng("inputImages/watermark.png");
$image_dest_width = imagesx($image_dest);
$image_dest_height = imagesy($image_dest);
$image_src_width = imagesx($image_src);
$image_src_height = imagesy($image_src);
$dst_x = ($image_dest_width - $image_src_width) - 30;
$dst_y = ($image_dest_height - $image_src_height) - 30;
imagecopy($image_dest , $image_src , $dst_x , $dst_y , 0 , 0 , $image_src_width , $image_src_height);
$result = imagejpeg($image_dest , "outputWatermark/umbrella.jpg");
if($result){
    echo "<b style='color:greenyellow'>Output OK</b><br>";
}else{
    echo "<b style='color:orangered'>Output ERROR!</b><br>";
}