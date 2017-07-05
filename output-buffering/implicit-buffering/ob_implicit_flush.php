<?php
ob_implicit_flush(TRUE);
ob_start();
$x = 0;
while ($x < 10){
    echo $x . "<br>";
    ob_flush();
    sleep(1);
    $x++;
}
