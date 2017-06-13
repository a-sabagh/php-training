<?php
$filename = 'directory/data';
if(file_exists($filename)){
    $handle = fopen($filename, "a+");
    $fline = fgets($handle);
    echo $fline;
}
echo '<hr>';
$fline2 = fgets($handle , 4);
echo $fline2;