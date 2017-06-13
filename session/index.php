<?php
session_start();
if(isset($_SESSION['index'])){
    $_SESSION['index']++;
}else{
    $_SESSION['index']= 1;
}
$_SESSION['other'];
?>
<html>
    <head>
        <title>session</title>
    </head>
    <body>
        <?php
        echo 'index count: ' . $_SESSION['index'] . '<br>';
        echo 'other count: ' . $_SESSION['other'] . '<br>';
        echo '<a href="otherPage.php" title="otherPage">otherPage</a>';
        ?>
    </body>
</html>

