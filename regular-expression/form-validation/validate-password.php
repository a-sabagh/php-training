<?php
$password = $_POST['password'];
$validate_password = preg_match("/^[a-z0-9_-]{6,18}$/" , $password);
if($validate_password){
    echo "<span style='color: green;margin-left:5px;'>Password is STRONG</span>";
}else{
    echo "<span style='color: orangered;margin-left:5px;'>Password is WEAK</span>";
}