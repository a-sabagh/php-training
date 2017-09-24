<?php 
$options = array(
	'location'=>'http://localhost/PHP/SOAP/mathmatic-webservice/soapServer/server.php',
	'uri'=>'http://localhost/PHP/SOAP/mathmatic-webservice/soapServer/server.php'
	);
$client = new soapClient(NULL,$options);
echo $client->sum(5,2) . "<br>";         //7
echo $client->multiple(2,2) . "<br>";    //4
echo $client->subtraction(5,3) . "<br>"; //2
echo $client->divition(6,2) . "<br>";    //3
echo $client->absolute(-3.5) . "<br>";   //3.5
echo $client->up_round(3.2) . "<br>";    //4
echo $client->down_round(3.2) . "<br>";  //3 
