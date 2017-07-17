<img src="pictures/marble.png" alt="tux" ><hr>
<?php
$image = imagecreatefrompng("pictures/marble.png");
$image_width = imagesx($image);
echo "Width:  $image_width";