<?php
/*
1.createElement
2.createAttribute
3.createComment
4.appendChild
5.save
*/

$xml = new DomDocument("1.0","utf-8");
//create Elements
$root = $xml->createElement("root");
$app = $xml->createElement("app","gnt");
$wp = $xml->createElement("wp","RNG");
//create comment
$comment = $xml->createComment("prefix using in programming");
//create Attributes
$wp_desc = $xml->createAttribute("description");
$app_desc = $xml->createAttribute("description");
//set value for Attributes
$wp_desc->value = "wordpress prefix";
$app_desc->value = "php applicatios prefix";
//append Attributes
$wp->appendChild($wp_desc);
$app->appendChild($app_desc);
//append Elements
$xml->appendChild($root);
$root->appendChild($wp);
$root->appendChild($app);
//append comment
$root->appendChild($comment);
//save
$xml->save("output/prefix.xml");
