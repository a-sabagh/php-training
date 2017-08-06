<?php
$username = $_POST['username'];
$validate_username = preg_match("/^[\w\d\-\_]{5,8}$/" , $username);
if($validate_username){
    echo "<span style='color: green;margin-left:5px;'>Username is VALID</span>";
}else{
    echo "<span style='color: orangered;margin-left:5px;'>Username is INVALID</span>";
}