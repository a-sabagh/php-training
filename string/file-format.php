<form action="" method="post">
<input type="text" name="file" >
<input type="submit" name="send" value="send">
</form>
<?php
//this file recognize the format of string file name
if(isset($_POST['send'])){
$string_file_name = $_POST['file'];
$format = substr($string_file_name, strpos($string_file_name, "."));
switch ($format) {
    case ".php":
        echo "this is php file";
        break;
    case ".html":
        echo "this is html file";
        break;
    case ".css":
        echo "this is css file";
        break;
    case ".js":
        echo "this is javascript file";
        break;
    default:
        echo "i dont recognize the format of this file";
        break;
}
}
