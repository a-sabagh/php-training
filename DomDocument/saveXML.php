<?php
$xml = new DomDocument();
$xml->load("note2.xml");
$to_item = $xml->getElementsByTagName("to")->item(0);
echo $xml->saveXML($to_item);

