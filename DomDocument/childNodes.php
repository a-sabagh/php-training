<?php
$xml = new DomDocument();
$xml->load("contacts.xml");
$rows = $xml->getElementsByTagName("row");
foreach($rows as $row){
	foreach($row->childNodes as $child_item){
		echo $child_item->nodeValue . "<br>";
	}
	echo "<hr>";
}