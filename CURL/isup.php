<?php 
if(isset($_POST['submit'],$_POST['url'])){
	$url = "http://downforeveryoneorjustme.com/{$_POST['url']}";
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_HEADER,FALSE);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
	$output = curl_exec($curl);
	curl_close($curl);
	libxml_use_internal_errors(TRUE);//remove notice of html validator
	$dom = new DomDocument();
	$dom->loadHtml($output);
	$p = $dom->getElementsByTagName("p");
	echo $dom->saveHTML($p->item(0));
}else{
?>
	<form action="" method="post">
		<input type="text" name="url" >
		<input type="submit" name="submit" value="submit" >
	</form>
<?php
}
?>
