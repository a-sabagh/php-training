<?php
if(file_exists("directory/data")){
    unlink("directory/data");
    echo 'data file is unlinked';
}else{
    echo 'data file is not exist';
}