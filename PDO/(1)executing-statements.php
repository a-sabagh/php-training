<?php

$user = 'root';
$pass = 'root';
$dbh = $dbh = new PDO("mysql:host=localhost;dbname=wpdb;" , $user , $pass);
$query = "CREATE TABLE pdo(id INT(3))";
$dbh->query($query);