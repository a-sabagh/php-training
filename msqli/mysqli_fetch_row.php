<?php
$link = mysqli_connect('localhost' , 'root' , '' , 'wpdbfa');
if(mysqli_connect_errno()){
    printf("connection failed %s\n" , mysqli_connect_errno());
    exit();
}else{
    echo 'connecting to database is OK! <br>';
}
$query = "SELECT ID , post_title FROM wp_posts LIMIT 5";
$query_result = mysqli_query($link , $query);
$result = mysqli_fetch_row($query_result);
while($result = mysqli_fetch_row($query_result)){
    var_dump($result);
    echo '<br>';
}
$close = mysqli_close($link);
