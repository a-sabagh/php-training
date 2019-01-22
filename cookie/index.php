<?php
if(isset($_GET['color'])){
    setcookie('color' , $_GET['color'] , time() + 100);
}
?>
<html>
    <head>
        <title>cookie</title>
        <meta charset="utf-8">
        <style>
            body{
                padding: 50px;
                <?php
                if(isset($_GET['color'])){ 
                    echo 'background-color:' .  $_GET['color'];
                }elseif(@$_COOKIE['color']){
                    echo 'background-color:' .  $_COOKIE['color'];
                }
                ?>
            }
        </style>
    </head>
    <body>
        <a href="?color=yellow" style="color: yellow;">yellow</a><br>
        <a href="?color=red" style="color: red;">red</a><br>
        <a href="?color=green" style="color: green;">green</a><br>
    </body>
</html>