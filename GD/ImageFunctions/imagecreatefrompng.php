<?php
header("Content-Type: image/png");
$image = imagecreatefrompng("pictures/marble.png");
imagepng($image);
imagedestroy($image);