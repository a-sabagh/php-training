<?php
$path = "./directory2";
$dir = dir($path);
var_dump($dir);
echo '<hr>';
echo $dir->handle . '<br>';
echo $dir->path . '<br>';