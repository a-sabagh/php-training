<?php

define(HOST, 'localhost');
define(USER, 'root');
define(PASSWORD, 'root');
define(DATABASE, 'wpdb');
define(PORT, 8888);
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE, PORT);
if ($mysqli->connect_error) {
    echo "error with mysqli database connection: " . $mysqli->connect_error;
} else {
    $query = "SELECT * FROM wp_posts LIMIT 5";
    $result = $mysqli->query($query);
    $row = $result->fetch_assoc();
    echo "<pre>";
    var_dump($row);
    echo "<pre><hr>";
}
while($row = $result->fetch_assoc()){
    echo $row['ID'] . "<hr>";
}