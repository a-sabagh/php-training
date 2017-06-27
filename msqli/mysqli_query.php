<?php
$link = mysqli_connect('localhost' , 'root' , '' , 'wpdbfa');
if(mysqli_connect_errno()){
    printf("connection failed %s\n" , mysqli_connect_errno());
    exit();
}else{
    echo 'connecting to database is OK! <br>';
}
mysqli_select_db($link , "wpdbfa");
$query = "CREATE TABLE IF NOT EXISTS wp_test(
    cl1 INT(10) NOT NULL AUTO_INCREMENT,
    cl2 VARCHAR(15) ,
    cl3 VARCHAR(5) ,
    PRIMARY KEY(cl1)
)";
$result = mysqli_query($link , $query);
if($result){
    echo 'Query OK';
}else{
    echo 'Query failed';
}
$close = mysqli_close($link);
