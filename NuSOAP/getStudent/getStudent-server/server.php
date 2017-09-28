<?php 
require_once "../../lib/nusoap.php";
$server = new soap_server();
$server->register("student_list");

function student_list(){
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "student";
	$con = mysqli_connect($host,$username,$password,$db);
	if(mysqli_connect_errno()){
		printf("connection falil %s \n",mysqli_connect_errno());
		exit();
	}
	mysqli_select_db($con,$db);
	$query = "SELECT name FROM student";
	$result = mysqli_query($con,$query);
	if($result){
		$student_list = mysqli_fetch_all($result);
		$students = array();
		foreach($result as $student){
			$students[] = $student;
		}
		return $students;
	}else{
		echo "Error with query";
	}
}
$HTTP_RAW_POST_DATA = (isset($HTTP_RAW_POST_DATA))? $HTTP_RAW_POST_DATA : "";
$server->service($HTTP_RAW_POST_DATA);