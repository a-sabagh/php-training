<?php

$user = 'root';
$pass = 'root';
$dbh = $dbh = new PDO("mysql:host=localhost;dbname=wpdb;" , $user , $pass);
$query = "SELECT * FROM wp_admin";
$result = $dbh->query($query);
$row = $result->fetchObject();
echo '<pre>';
var_dump($row);
echo '<pre><hr>';
while($row_obj = $result->fetchObject()){
    echo $row_obj->fname . '<br>';
}