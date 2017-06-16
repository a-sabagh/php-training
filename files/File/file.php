<?php
$filename = "directory/data";
$mode = "a+";
$file_handler = fopen($filename , $mode);
$string = "hello world";
fwrite($file_handler, $string);
fclose($file_handler);