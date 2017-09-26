<?php
class client{
	public $instanse;
	public function __construct(){
		$options = array(
			"location" => "http://localhost/PHP/SOAP/studentList-webservice/soapServer/server.php",
			"uri" => "http://localhost/PHP/SOAP/studentList-webservice/soapServer/server.php"
		);
		$this->instanse = new soapClient(NULL,$options);
		
		//set the header
		$auth_param = new stdClass();
		$auth_param->username = "root";
		$auth_param->password = "root";
		
		//representing a variable or object for use with SOAP services. 
		$header_params = new soapVar($auth_param,SOAP_ENC_OBJECT);
		//Represents a SOAP header. 
		$header = new soapHeader("gnt","authenticate",$header_params,FALSE);
		//Sets SOAP headers for subsequent calls
		$this->instanse->__setSoapHeaders(array($header));
	}
	public function studentList(){
		return $this->instanse->__soapCall("studentList",array());
	}
	public function getStudentName($id){
		return $this->instanse->__soapCall("getStudentName",array($id));
	}
}
$client = new client();
