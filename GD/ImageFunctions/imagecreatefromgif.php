<?php
header("Content-Type: image/gif");
$image = imagecreatefromgif("pictures/download.gif");
imagegif($image);
imagedestroy($image);