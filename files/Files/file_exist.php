<?php
$filename = "directory/data";
if(file_exists($filename)){
    echo 'data file is exist';
}else{
    echo 'data file not exist';
}