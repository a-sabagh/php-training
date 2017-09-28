<?php 
class student{
	private $con;
	public function __construct(){
		$this->con = self::connection("localhost","root","","student");
	}
	public static function connection($host,$username,$password,$db){
		$connection = mysqli_connect($host,$username,$password,$db);
		if(mysqli_connect_errno()){
			printf("connection fail%s\n" , mysqli_connect_errno());
			exit();
		}
		mysqli_select_db($connection,$db);
		return $connection;
	}
	public function authenticate($auth_param){
		if($auth_param->username == "root" and $auth_param->password == "root"){
			return TRUE;
		}else{
			throw new soapFault("username/password be wrong",401);
		}
	}
	public function studentList(){
		$query = "SELECT name FROM student";
		$query_result = mysqli_query($this->con,$query);
		if($query_result){
			$result = mysqli_fetch_all($query_result);
		}
		$students = array();
		foreach($result as $student){
			$students[] = $student[0];
		}
		return $students;
	}
	public function getStudentName($id){
		$query = "SELECT name FROM student WHERE id={$id}";
		$query_result = mysqli_query($this->con,$query);
		if($query_result){
			$result = mysqli_fetch_row($query_result);
		}
		return $result;
	}
}
$options = array("uri" => "http://localhost/PHP/SOAP/studentList-webservice/soapServer/server.php");
$server = new soapServer(NULL,$options);
$server->setClass("student");
$server->handle();

