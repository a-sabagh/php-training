<?php
$stdClass_object = new stdClass();
$stdClass_object->firstname = 'abolfazl';
$stdClass_object->lastname = 'sabagh';
echo "defult value of name : " . $stdClass_object->firstname;
echo '<br />';
echo "defult value of lastname : " . $stdClass_object->lastname; ?>
<hr />
<form action="" method="post">
    <table>
        <tr><td>firstname : </td><td><input type="text" name="firstname" /></td></tr>
        <tr><td>lastname : </td><td><input type="text" name="lastname" /></td></tr>
    </table>
    <input type="submit" name="change" value="change values" />
</form>
<hr />
<?php 
 if (isset($_POST['change'])) {
     $stdClass_object->firstname = $_POST['firstname'];
     $stdClass_object->lastname = $_POST['lastname'];
}
echo "the changed value of firstname : " . $stdClass_object->firstname;
echo '<br />';
echo "the changed value of lastname : " . $stdClass_object->lastname;
