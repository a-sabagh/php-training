<?php 

$dom = new DomDocument();
$dom->load('AndroidManifest.xml');
foreach($dom->getElementsByTagName('uses-permission') as $node){
    echo $node->attributes->getNamedItem('name')->value . "\n"; 
}