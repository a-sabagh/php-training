<?php
//bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]] )
if(is_dir("./directory2/directory3/newdirectory")){
    echo 'directory is exist for creating file first remove directory: ./directory2/directory3/newdirectory';
}else{
    mkdir("./directory2/directory3/newdirectory" , 0777 , true);
}