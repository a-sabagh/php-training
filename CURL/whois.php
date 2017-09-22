<?php 
if(isset($_POST['submit'],$_POST['url'])){
	$url = "https://www.whois.com/whois/{$_POST['url']}";
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_HEADER,FALSE);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
	$output = curl_exec($curl);
	curl_close($curl);
	libxml_use_internal_errors(TRUE);//remove notice of html validator
	$dom = new DomDocument();
	$dom->loadHTML($output);
	$node = $dom->getElementsByTagName("pre");
	$whois = $node->item(0)->nodeValue;
	
	echo "<pre>{$whois}</pre>";
}else{
?>
	<form action="" method="post">
		<input type="text" name="url" >
		<input type="submit" name="submit" value="submit" >
	</form>
<?php
}
?>
