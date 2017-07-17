<img src="pictures/marble.png" alt="tux" ><hr>
<?php
$image = imagecreatefrompng("pictures/marble.png");
$image_height = imagesy($image);
echo "Height:  $image_height";