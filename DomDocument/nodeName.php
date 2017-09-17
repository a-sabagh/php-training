<?php
$xml = new DomDocument();
$xml->load("note.xml");
$to = $xml->getElementsByTagName("to");
echo $to->item(0)->nodeName;