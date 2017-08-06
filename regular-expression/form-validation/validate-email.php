<?php
$email = $_POST['email'];
$validate_email = preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , $email);
if($validate_email){
    echo "<span style='color: green;margin-left:5px;'>Email is VALID</span>";
}else{
    echo "<span style='color: orangered;margin-left:5px;'>Email is INVALID</span>";
}