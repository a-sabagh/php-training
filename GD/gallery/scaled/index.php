<?php
function gnt_scl_optimizer($input , $output , $width , $height){
    $image_thumb_width = $width;
    $image_thumb_height = $height;
    $image_thumb = imagecreatetruecolor($image_thumb_width,$image_thumb_height);
    $image_full = imagecreatefromjpeg($input);
    $image_full_width = imagesx($image_full);
    $image_full_height = imagesy($image_full);
    imagecopyresampled($image_thumb , $image_full , 0 , 0 , 0 , 0 , $image_thumb_width , $image_thumb_height , $image_full_width , $image_full_height);
    $result_jpg = imagejpeg($image_thumb , $output);
    if($result_jpg){
        echo "<span style='color: greenyellow;'>thumnail created with jpg format</span><br>";
    }else{
        echo "<span style='color: orangered;'>error with creating jpg thumbnail</span><br>";
    }
}
$i=0;
$inputGallery_array = glob("inputGallery/*");
foreach($inputGallery_array as $filename){
    $input = $filename;
    //$output = str_replace("inputGallery" , "outputGallery" , $filename);
    $output = "outputGallery/hallowin{$i}.jpg";
    $width = 500;
    $height = 300;
    gnt_scl_optimizer($input , $output , $width , $height);
    $i++;
}
