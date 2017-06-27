<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $last_login = $_POST['last_login'];
    define(HOST, 'localhost');
    define(USER, 'root');
    define(PASSWORD, 'root');
    define(DATABASE, 'wpdb');
    define(PORT, 8888);
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE, PORT);
    if ($mysqli->connect_error) {
        echo "error with mysqli database connection: " . $mysqli->connect_error;
    } else {
        $query = "INSERT INTO wp_admin(fname , lname , last_login) VALUES( ? , ? , ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sss", $fname, $lname, $last_login);
        $stmt->execute();
    }
}
?>
<form action="<?php echo $_SERVER[PHP_SELF]; ?>" method="post">
    fname: <input type="text" name="fname" value="" >
    lname: <input type="text" name="lname" value="">
    last_login: <input type="datetime" name="last_login" >
    <input type="submit" name="submit" value="insert">
</form>
