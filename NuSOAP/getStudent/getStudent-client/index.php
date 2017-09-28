<?php 
require_once "../../lib/nusoap.php";
$client = new nusoap_client("http://localhost/PHP/NuSOAP/getStudent/getStudent-server/server.php");
$output = $client->call("student_list" , array());
if($client->fault){
	echo "<strong>Fault</strong>";
	print_r($output);
}elseif($client->getError()){
	echo "<strong>Error: " . $client->getError() . "</strong>";
}else{
	print_r($output);
}