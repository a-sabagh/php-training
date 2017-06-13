<?php
header("content-type:image/png");
$filename = 'directory/gnutec.png';
$file_content = file_get_contents($filename);
echo $file_content;