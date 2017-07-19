<?php
function gnt_wrt_optimizer($input , $output , $width){
    $thumb_width = $width;
    $image_full = imagecreatefromjpeg($input);
    $image_full_width = imagesx($image_full);
    $image_full_height = imagesy($image_full);
    $ratio = $image_full_width/$image_full_height;
    $thumb_height = $thumb_width/$ratio;
    $image_thumb = imagecreatetruecolor($thumb_width,$thumb_height);
    imagecopyresampled($image_thumb , $image_full , 0 , 0 , 0 , 0 , $thumb_width , $thumb_height , $image_full_width , $image_full_height);
    $result_jpg = imagejpeg($image_thumb , $output);
    if($result_jpg){
        echo "<span style='color: greenyellow;'>thumnail created with jpg format</span><br>";
    }else{
        echo "<span style='color: orangered;'>error with creating jpg thumbnail</span><br>";
    }
}
function gnt_hrt_optimizer($input , $output , $height){
    $thumb_height = $height;
    $image_full = imagecreatefromjpeg($input);
    $image_full_width = imagesx($image_full);
    $image_full_height = imagesy($image_full);
    $ratio = $image_full_width/$image_full_height;
    $thumb_width = $thumb_height*$ratio;
    $image_thumb = imagecreatetruecolor($thumb_width,$thumb_height);
    imagecopyresampled($image_thumb , $image_full , 0 , 0 , 0 , 0 , $thumb_width , $thumb_height , $image_full_width , $image_full_height);
    $result_jpg = imagejpeg($image_thumb , $output);
    if($result_jpg){
        echo "<span style='color: greenyellow;'>thumnail created with jpg format</span><br>";
    }else{
        echo "<span style='color: orangered;'>error with creating jpg thumbnail</span><br>";
    }
}
$i=1;
$inputGallery_array = glob("inputGallery/*");
foreach($inputGallery_array as $filename){
    $tmp_image = imagecreatefromjpeg($filename);
    $tmp_image_width = imagesx($tmp_image);
    $tmp_image_height = imagesy($tmp_image);
    $tmp_image_ratio = $tmp_image_width/$tmp_image_height;
    if($tmp_image_ratio > 1){
        $input = $filename;
        $output = "outputGallery/hallowin{$i}.jpg";
        //$output = str_replace("inputGallery" , "outputGallery" , $filename);
        $width = 500;
        gnt_wrt_optimizer($input , $output , $width);
        $i++;
    }else{
        $input = $filename;
        $output = "outputGallery/hallowin{$i}.jpg";
        //$output = str_replace("inputGallery" , "outputGallery" , $filename);
        $height = 500;
        gnt_hrt_optimizer($input , $output , $height);
        $i++;
    }
}
