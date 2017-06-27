<?php

$user = 'root';
$pass = 'root';
$dbh = $dbh = new PDO("mysql:host=localhost;dbname=wpdb;" , $user , $pass);
$query = "SELECT * FROM wp_admin";
$result = $dbh->query($query);
$rows = $result->fetchAll();
echo '<pre>';
var_dump($rows);
echo '</pre>';