<?php
header('Content-type: application/json');

$config = [
    'server' => "SERVER",
    'username' => "USERNAME",
    'password' => 'PASSWORD',
];

$connection = ftp_connect($config['server']);
$login_result = ftp_login($connection,$config['username'],$config['password']);
if(!$login_result){
    return [false];
}

$directory_list = ftp_nlist($connection,'.');
echo json_encode($directory_list);
