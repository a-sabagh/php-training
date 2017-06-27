<?php
$user = $pass = 'root';
$dbh = new PDO("mysql:host=localhost;dbname=wpdb;" , $user , $pass);
$query = "INSERT INTO wp_admin(fname , lname , last_login) VALUES( :first_name , :last_name , :last_login)";
$stmt = $dbh->prepare($query);
$stmt->bindParam(':first_name', $fname);
$stmt->bindParam(':last_name', $lname);
$stmt->bindParam(":last_login", $last_login);

$fname = 'mahdi';
$lname = 'janatian';
$last_login = '2017-02-11 15:00:34';
$stmt->execute();

$fname = 'ali';
$lname = 'aghasizadeh';
$last_login = '2013-09-23 01:00:34';
$stmt->execute();

$fname = 'hamide';
$lname = 'abedi';
$last_login = '2016-11-01 10:23:45';

$stmt->execute();
