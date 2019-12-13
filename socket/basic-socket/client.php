<?php

set_time_limit(0);


$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

$res = socket_connect($socket, '127.0.0.1', 2010);

$message = $_GET['msg'];

socket_write($socket, $message, strlen($message));

$server_respond = socket_read($socket, 1024);

echo $server_respond;

socket_close($socket);
