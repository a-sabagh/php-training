<?php
$filename = 'directory/data';
$filename_copy = 'directory/directory1/data';
if(file_exists($filename)){
    copy($filename, $filename_copy);
}