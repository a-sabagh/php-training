<?php
session_start();
if (isset($_SESSION['other'])) {
    $_SESSION['other'] ++;
} else {
    $_SESSION['other'] = 1;
}
if(!isset($_SESSION['index'])){
    $_SESSION['index'] = 1;
}
?>
<html>
    <head>
        <title>session</title>
    </head>
    <body>
        <?php
        echo 'index count: ' . $_SESSION['index'] . '<br>';
        echo 'other count: ' . $_SESSION['other'] . '<br>';
        echo '<a href="index.php" title="otherPage">index.php</a>';
        ?>
    </body>
</html>
