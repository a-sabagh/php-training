<?php
$link = mysqli_connect('localhost' , 'root' , '' , 'wpdbfa');
if(mysqli_connect_errno()){
    printf("connection failed %s\n" , mysqli_connect_errno());
    exit();
}else{
    echo 'connecting to database is OK! <br>';
}
mysqli_select_db($link , "wpdbfa");
$query = "SELECT ID , post_title FROM wp_posts LIMIT 5";
$query_result = mysqli_query($link , $query);

/**
 *@resut
 *@output type: MYSQLI_ASSOC, MYSQLI_NUM, MYSQLI_BOTH
 */

while($result = mysqli_fetch_array($query_result , MYSQLI_BOTH)){
    var_dump($result);
    echo '<br>';
}
$close = mysqli_close($link);
