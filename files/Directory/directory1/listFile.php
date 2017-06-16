<?php
$dir = "./directory2/directory3";
if(is_dir($dir)){
    if($dir_handler = opendir($dir)){
        while($file = readdir($dir_handler)){
            echo "Directory name: <span style='color: orangered;'>{$file}</span> | File type: <span style='color: blue;'>" . filetype("{$dir}/{$file}") . '</span><br>';
        }
        closedir($dir_handler);
    }
}