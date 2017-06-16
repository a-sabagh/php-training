<?php
$filelist = glob("*");
foreach ($filelist as $file){
    echo $file . '<br>';
}