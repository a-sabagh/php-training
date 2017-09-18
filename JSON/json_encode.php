<?php 
echo "<h2>Create Heading With Array:</h2>";
$array = array(
	"firstname" => "abolfazl",
	"lastname" => "sabagh",
	"exprience" => array(
		"php","html5","css","wordpress"
	) 
);

$jsn = json_encode($array);
var_dump($jsn);
echo "<hr>";
echo "<h2>Create Heading With Object:</h2>";
$object = new stdClass();
$object->firstname = "abolfazl";
$object->lastname = "sabagh";
$object->exprience = array("php","html5","css","wordpress");

$jsn = json_encode($object);

var_dump($jsn);
