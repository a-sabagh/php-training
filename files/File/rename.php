<?php
$oldname = 'directory/New';
$newname = 'directory/new1';
if(file_exists($oldname)){
    rename($oldname, $newname);
}else{
    echo 'New file not exist<br>';
}
$newdirectory = 'directory/directory1';
mkdir($newdirectory);
$oldname = 'directory/new1';
$newname = 'directory/directory1/new1';
if(file_exists($oldname)){
    rename($oldname, $newname);
}else{
    echo 'directory/new1 not exist <br>' ;
}
