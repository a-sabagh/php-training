<?php
if(isset($_POST['submit'],$_POST['url'])){
	$url = $_POST['url'];
	$xml = new DomDocument();
	$xml->load("http://data.alexa.com/data?cli=10&url=" . $url);
	
	$node = $xml->getElementsByTagName("POPULARITY");
	if($node->length !== 0){
		$global = $node->item(0)->getAttribute("TEXT");
		echo "Global Rank is: {$global}<br>";
	}	
	$node = $xml->getElementsByTagName("COUNTRY");
	if($node->length !== 0){
		$country = $node->item(0)->getAttribute("NAME");
		$country_rank = $node->item(0)->getAttribute("RANK");
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
