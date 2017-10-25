<form action="" method="post">
<input type="checkbox" name="group[]" value="1">
<input type="checkbox" name="group[]" value="2">
<input type="checkbox" name="group[]" value="3">
<input type="checkbox" name="group[]" value="4">
<input type="checkbox" name="group[]" value="5">
<input type="checkbox" name="group[]" value="6">
<input type="submit" name="submit" value="submit" >
</form>
<?php
if(isset($_POST['submit'])){
    var_dump($_POST['group']);
}