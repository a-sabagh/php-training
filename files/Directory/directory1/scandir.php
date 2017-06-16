<?php
$directory = './directory2/directory3';
$scanned_directory = scandir($directory);
print_r($scanned_directory);