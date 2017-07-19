<?php
function gnt_hc_optimizer($input , $output , $width , $height){
    $thumb_width = $width;
    $thumb_height = $height;
    $image_thumb = imagecreatetruecolor($thumb_width,$thumb_height);
    $image_full = imagecreatefromjpeg($input);
    $image_full_width = imagesx($image_full);
    $image_full_height = imagesy($image_full);
    $ratio = $image_full_width/$image_full_height;
    $image_cp_width = $thumb_width;
    $image_cp_height = $thumb_width/$ratio;
    imagecopyresampled($image_thumb , $image_full , 0 , 0 , 0 , 0 , $image_cp_width , $image_cp_height , $image_full_width , $image_full_height );
    $result_jpg = imagejpeg($image_thumb , $output);
    if($result_jpg){
        echo "<span style='color: greenyellow;'>thumnail created with jpg format</span><br>";
    }else{
        echo "<span style='color: orangered;'>error with creating jpg thumbnail</span><br>";
    }
}
$i = 1;
$inputGallery_array = glob("inputGallery/*");
foreach($inputGallery_array as $filename){
    $input = $filename;
    //$output = str_replace("inputGallery" , "outputGallery" , $filename);
    $output = "outputGallery/hallowin{$i}.jpg";
    $width = 500;
    $height = 300;
    gnt_hc_optimizer($input , $output , $width , $height);
    $i++;
}

