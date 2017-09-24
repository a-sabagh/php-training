<?php 
class mathmetical{
	public function sum($a,$b){ return $a+$b; }
	public function multiple($a,$b){ return $a*$b; }
	public function subtraction($a,$b){ return $a-$b; }
	public function divition($a,$b){ return $a/$b; }
	public function absolute($x){ return abs($x); }
	public function up_round($x){ return ceil($x); }
	public function down_round($x){ return floor($x); }
}
$options = array('uri' => 'http://localhost/PHP/SOAP/obj-mathmatic-webservice/soapServer/server.php');
$server = new soapServer(NULL,$options);
$server->setClass('mathmetical');
$server->handle();