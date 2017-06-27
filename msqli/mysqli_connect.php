<?php
$link = mysqli_connect('localhost' , 'root' , '' , 'wpdbfa');
if(mysqli_connect_errno()){
    printf("connection failed %s\n" , mysqli_connect_errno());
    exit();
}else{
    echo 'connecting to database is OK!';
}
mysqli_select_db($link , "wpdbfa");
$close = mysqli_close($link);
