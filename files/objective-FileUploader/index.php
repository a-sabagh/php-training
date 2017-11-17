<!DOCTYPE html>
<html>
    <head>
        <title>upload center</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        if (isset($_POST['submit'])) {
            $max_size = 200 * 1024;
            try {
                require_once "class.uploadCenter.php";
                $destination = "uploads";
                $attachment = new uploadCenter($destination);
                $attachment->setMaxSize($max_size);
                $attachment->setType(array("text/x-python","image/jpeg", "image/png", "image/webp", "image/x-icon", "application/zip", "application/pdf", "application/x-rar-compressed"));
            } catch (Exception $e) {
                $exception_error = $e->getMessage();
            }
            $attachment->upload($_FILES['file_name']);
            $messages = $attachment->getMessage();
            if (!empty($messages)) {
                echo "<ul>";
                foreach ($messages as $message) {
                    echo "<li>{$message}</li>";
                }
                echo "</ul>";
            }
            if (isset($exception_error)) {
                echo $exception_error;
            }
        }
        ?>

        <h1>upload center:</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="file_name[]" multiple>
            <input type="submit" name="submit" value="upload">
        </form>
    </body>
</html>