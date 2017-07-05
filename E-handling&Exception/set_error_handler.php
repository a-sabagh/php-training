<?php

function rng_error_handler(){
    echo "Sorry , Contact with your Developer to debug this issue";
}
$error_handler = 'rng_error_handler';
set_error_handler($error_handler);
echo $a;