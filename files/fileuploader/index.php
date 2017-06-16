<!DOCTYPE html>
<html>
    <head>
        <title>fileuploader</title>
        <meta charset="utf-8">
        <style>
            .success{ color: green; }
            .error{ color: red; }
        </style>
        <?php
        if(isset($_POST['send_photo'])){
            $upload_name = $_FILES['image']['name'];
            $upload_type = $_FILES['image']['type'];
            $upload_tmp = $_FILES['image']['tmp_name'];
            $upload_error = $_FILES['image']['error'];
            $error = '';
            switch($upload_error):
                case 0;
                    $error = '<span class="success"> UPLOAD_ERR_OK</span>';
                    break;
                case 1;
                    $error = '<span class="error">UPLOAD_ERR_INI_SIZE</span>';
                    break;
                case 2;
                    $error = '<span class="error">UPLOAD_ERR_FORM_SIZE</span>';
                    break;    
                case 3;
                    $error = '<span class="error">UPLOAD_ERR_PARTIAL</span>';
                    break;    
                case 4;
                    $error = '<span class="error">UPLOAD_ERR_NO_FILE</span>';
                    break;    
                case 6;
                    $error = '<span class="error">UPLOAD_ERR_NO_TMP_DIR</span>';
                    break;
                case 7;
                    $error = '<span class="error">UPLOAD_ERR_CANT_WRITE</span>';
                    break;
                case 8;
                    $error = '<span class="error">UPLOAD_ERR_EXTENSION</span>';
                    break;
            endswitch;
            move_uploaded_file($upload_tmp,"uploads/{$upload_name}");
        }
        ?>
    </head>
    <body>
        <?php echo (isset($error))? $error : ''; ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" >
            <input type="submit" name="send_photo" value="send" >
        </form>
    </body>
</html>