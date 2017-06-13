<html>
    <head>
        <title>cookie</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            setcookie('charset' , 'utf-8' , time() + 20);
            setcookie('lang' , 'php');
            setcookie('content' , 'html');
            if(isset($_COOKIE['charset'])){
                echo $_COOKIE['charset'] . '<br>';
            }
            if(isset($_COOKIE['content'])){
                echo $_COOKIE['content'] . '<br>';
            }
            if(isset($_COOKIE['lang'])){
                echo $_COOKIE['lang'] . '<br>';
            }
            if(isset($_COOKIE['charset'])){
                setcookie('charset' , null , -1);
            }
        ?>
    </body>
</html>