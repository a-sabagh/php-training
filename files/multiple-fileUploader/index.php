<!DOCTYPE html>
<html>
<head>
    <title>fileuploader</title>
    <meta charset="utf-8">
</head>
<body>
    <?php 
        if(isset($_POST['send_photo'])){
            echo "<pre>";
            var_dump($_FILES['filename']);
            echo "</pre>";
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="filename[]"  multiple>
        <input type="submit" name="send_photo" value="send" >
    </form>
</body>
</html>