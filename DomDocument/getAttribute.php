<?php
$xml = new DomDocument();
$xml->load("contacts.xml");
$column = $xml->getElementsByTagName("column");
echo $column->item(0)->getAttribute('name') . "<br>";
echo $column->item(1)->getAttribute('name') . "<br>";
echo $column->item(2)->getAttribute('name') . "<br>";
echo $column->item(3)->getAttribute('name') . "<br>";
echo $column->item(4)->getAttribute('name') . "<br>";
echo $column->item(5)->getAttribute('name') . "<br>";
echo $column->item(6)->getAttribute('name') . "<br>";
echo $column->item(7)->getAttribute('name') . "<hr>";
$row = $xml->getElementsByTagName("row");
foreach($row->item(0)->childNodes as $child){
	echo $child->nodeValue . "<br>";
}