<?php
$link = mysqli_connect('localhost' , 'root' , '' , 'wpdbfa');
if(mysqli_connect_errno()){
    printf("connection failed %s\n" , mysqli_connect_errno());
    exit();
}else{
    echo 'connecting to database is OK!<br>';
}
$query = "SELECT ID , post_title FROM wp_posts LIMIT 5";
$result = mysqli_query($link , $query);

while($finfo = mysqli_fetch_field($result)){
    printf("Name:     %s<br>", $finfo->name);
    printf("Table:    %s<br>", $finfo->table);
    printf("max. Len: %d<br>", $finfo->max_length);
    printf("Flags:    %d<br>", $finfo->flags);
    printf("Type:     %d<hr>", $finfo->type);
}
mysqli_free_result($result);
$close = mysqli_close($link);
