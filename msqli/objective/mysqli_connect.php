<?php
define('HOST','localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'wpdb');
define('PORT', 8888);
$connection = mysqli_connect(HOST , USER , PASSWORD , DATABASE , PORT);
if($connection->connect_error){
    echo "error with connectiong mysql database: " . $connection->connect_error;
}else{
    var_dump($connection);
}

