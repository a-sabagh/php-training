<?php
function generate_license_key($id){
    $salt = "hello-world";
    $microtime = microtime() . rand(1000, 9999);
    $license_string = "{$id}_{$salt}_{$microtime}";
    $license_crypt = md5($license_string);
    $license_key = substr($license_crypt,0,8) 
        . "-"
        . substr($license_crypt,7,4)
        . "-"
        . substr($license_crypt,11,4)
        . "-"
        . substr($license_crypt,15,4)
        . "-"
        . substr($license_crypt,19,12);
    return $license_key;
}
echo generate_license_key(2,34);

