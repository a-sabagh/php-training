<?php
$xml = new DomDocument();
$xml->load("contacts.xml");
$rows = $xml->getElementsByTagName("row");
foreach($rows as $row){
	echo $row->nodeValue . "<hr>";
}