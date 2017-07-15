<?php
ob_start();
echo "a.sabagh72@gmail.com <br>";
echo "abolfazl sabagh<br>";
$x = ob_get_flush();
if(strpos($x, "@")){
    echo "You use from your email";
}else{
    echo "You don't use from your email";
}