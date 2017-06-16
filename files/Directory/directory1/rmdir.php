<?php
$dirpath = "directory2/directory3/directory4";
if(is_dir($dirpath)){
    if(rmdir($dirpath)){
        echo 'directory4 is removed';
    }else{
        echo 'directory is not empty';
    }
}else{
    echo 'directory4 is not exist';
}