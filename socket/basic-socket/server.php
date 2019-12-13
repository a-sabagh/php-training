<?php
set_time_limit(0);

$address = "127.0.0.1";
$port = 2010;

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

socket_bind($socket, $address, $port) or die("Can't BIND");
while (true) {
    socket_listen($socket) or die("Can't LISTEN");

    echo "Server waiting message...\n";

    $client = socket_accept($socket) or die("Can't ACCEPT");
    
    $message = socket_read($client, 1024) or die("Can't READ");
        
    echo "{$message} \n";

    $output = strrev($message);
    
    socket_write($client, $output) or die("Can't READ");
    
}

socket_close($client);
socket_close($socket);

echo "\nServer closed";
