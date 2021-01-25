<?php 
$dom = new DomDocument();
$dom->load('strings.xml');
$nodes = $dom->getElementsByTagName('string');
foreach($nodes as $index => $node){
    $node->nodeValue = "hello {$index}";
}
$dom->save('strings.xml');
