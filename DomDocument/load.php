<?php
$xml = new DomDocument('1.0','UTF-8');
$xml->load("contacts.xml");
echo $xml->textContent;
