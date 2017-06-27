<?php
$user = $pass = 'root';
if (isset($_POST['submit'])) {

    $dbh = new PDO("mysql:host=localhost;dbname=wpdb" , $user , $pass);
    $stmt = $dbh->prepare("INSERT INTO wp_admin(fname , lname , last_login) VALUES(:first_name , :last_name , :last_login)");
    $stmt->bindParam(":first_name", $fname);
    $stmt->bindParam(":last_name", $lname);
    $stmt->bindParam(":last_login", $last_login);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $last_login = $_POST['last_login'];
    $stmt->execute();
}
?>
<form action="<?php echo $_SERVER[PHP_SELF]; ?>" method="post">
    fname: <input type="text" name="fname" value="" >
    lname: <input type="text" name="lname" value="">
    last_login: <input type="datetime" name="last_login" >
    <input type="submit" name="submit" value="insert">
</form>
