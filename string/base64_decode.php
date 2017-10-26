<form method="post" action="">
	<textarea name="test"></textarea>
	<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit'])){
	$data = $_POST['test'];
	echo base64_decode($data);
}
