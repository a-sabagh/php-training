
<?php
$link = mysqli_connect('localhost' , 'root' , '' , 'wpdbfa');
if(mysqli_connect_errno()){
    printf("connection failed %s\n" , mysqli_connect_errno());
    exit();
}else{
    echo 'connecting to database is OK!<br>';
}
$query = "SELECT ID , post_title FROM wp_posts LIMIT 5";
$query_result = mysqli_query($link , $query);
$results = mysqli_fetch_all($query_result);
foreach($results as $result){
    var_dump($result);
    echo '<br>';
}
$close = mysqli_close($link);
