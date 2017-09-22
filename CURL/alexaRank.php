<?php
if(isset($_POST['submit'],$_POST['url'])){
	$url = "https://www.alexa.com/siteinfo/" . $_POST['url'];
	$curl =  curl_init();
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_HEADER,FALSE);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
	$output = curl_exec($curl);
	curl_close($curl);
	libxml_use_internal_errors(TRUE);//remove notice of html validator
	$dom = new DomDocument();
	$dom->loadHTML($output);
	$spans = $dom->getElementsByTagName("span");
	foreach($spans as $span){
		if($span->getAttribute("class") == "globleRank"){
			$node = $span;
		}
	}
	$global = (isset($node))? $node->childNodes->item(1)->childNodes->item(3)->nodeValue : "";
	if(!empty($global)){
		echo "Global Rank is: {$global}<br>"; 
	}
	foreach($spans as $span){
		if($span->getAttribute("class") == "countryRank"){
			$node = $span;
		}
	}
	$country_rank = (isset($node))? $node->childNodes->item(1)->childNodes->item(3)->nodeValue : "";
	$country = (isset($node))? $node->childNodes->item(1)->childNodes->item(1)->childNodes->item(1)->nodeValue : "";
	
	if(isset($country,$country_rank) and !empty($country) and !empty($country_rank) ){
		echo "Rank in {$country} is: {$country_rank}<br>";
	}
	
}else{
?>
	<form action="" method="post">
		<input type="text" name="url" placeholder="Enter website URL">
		<input type="submit" name="submit" value="submit" >
	</form>
<?php
}
?>