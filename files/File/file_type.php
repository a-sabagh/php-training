<?php
$filename = 'directory/data';
if(file_exists($filename)){
    echo filetype($filename) . '<br>';
}
$filename = 'directory/gnutec.png';
if(file_exists($filename)){
    echo filetype($filename) . '<br>';
}
$filename = 'directory/directory1';
if(file_exists($filename)){
    echo filetype($filename) . '<br>';
}