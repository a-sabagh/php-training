<?php 
$dom = new DomDocument();
$dom->load('strings.xml');
echo $dom->getElementsByTagName('string')->item(1)->nodeValue . "\n";
$dom->getElementsByTagName('string')->item(1)->nodeValue = 'hello';
echo $dom->getElementsByTagName('string')->item(1)->nodeValue . "\n";
$dom->save('strings.xml');
?>