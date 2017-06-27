<?php
define(HOST,'localhost');
define(USER, 'root');
define(PASSWORD, 'root');
define(DATABASE, 'wpdb');
define(PORT, 8888);
$mysqli = new mysqli(HOST , USER , PASSWORD , DATABASE , PORT);
if($mysqli->connect_error){
    echo "error with mysqli database connection: " . $mysqli->connect_error;
}else{
    $query = "CREATE TABLE IF NOT EXISTS wp_admin("
            . "id INT(3) NOT NULL AUTO_INCREMENT,"
            . "fname VARCHAR(32) NOT NULL,"
            . "lname VARCHAR(32) NOT NULL,"
            . "display_name VARCHAR(64),"
            . "last_login DATETIME NOT NULL,"
            . "ip INT(12),"
            . "PRIMARY KEY (id)"
            . ");";
    $result = $mysqli->query($query);
    if(!$result){
        echo "query fail :(" . $mysqli->errno . ")" . $mysqli->error; 
    }
}