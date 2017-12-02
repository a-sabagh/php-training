<form action="" method="post">
<input type="radio" name="group[0]" value="1">
<input type="radio" name="group[0]" value="2">
<br>
<input type="radio" name="group[1]" value="3">
<input type="radio" name="group[1]" value="4">
<br>
<input type="radio" name="group[2]" value="5">
<input type="radio" name="group[2]" value="6">
<br>
<input type="submit" name="submit" value="submit" >
</form>
<pre><?php if(isset($_POST['submit'])){ var_dump($_POST['group']); } ?></pre>
