<?php 
if(isset($_POST['submit'],$_POST['domain'])){
	$domain = $_POST['domain'];
	$url = "https://www.google.com/search?q=site:{$domain}";
	
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_HEADER,FALSE);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
	$output = curl_exec($curl);
	curl_close($curl);
	
	$matches = array();
	$result = preg_match("/A?a?bout.([0-9]+).results/",$output,$matches);
	if($result == 1){
		echo "About <b>{$matches[1]}</b> Page Was Indexed By Google From <b>{$domain}</b>";
	}
	
}else{
?>
	<form action="" method="post">
		<input type="text" name="domain" >
		<input type="submit" name="submit" value="submit" >
	</form>
<?php
}
?>
