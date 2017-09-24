<?php 
function sum($a,$b){ return $a+$b; }
function multiple($a,$b){ return $a*$b; }
function subtraction($a,$b){ return $a-$b; }
function divition($a,$b){ return $a/$b; }
function absolute($x){ return abs($x); }
function up_round($x){ return ceil($x); }
function down_round($x){ return floor($x); }
$options = array('uri'=>'http://localhost/PHP/SOAP/mathmatic-webservice/soapServer/server.php');
$soap = new soapServer(null,$options);
$soap->addFunction("sum");
$soap->addFunction("multiple");
$soap->addFunction("subtraction");
$soap->addFunction("divition");
$soap->addFunction("absolute");
$soap->addFunction("up_round");
$soap->addFunction("down_round");
$soap->handle();
