<?php

$UserName =$_POST['UserName'];
$Gender = $_POST['Gender'];
$MaritalStatus =$_POST['MaritalStatus'];
$Email = $_POST['Email'];
$Password =$_POST['Password'];

$host = "localhost";
$dbUsername="root";
$dbPassword="Kusuma@2000";
$dbName="nest";
$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_error()){
	die("connect error");
}
else{
	echo "Connected";
}

if($con->query("insert into user(UserName,Gender,MaritalStatus,Email,Password)values('$UserName','$Gender','$MaritalStatus','$Email','$Password')") === TRUE){

	//echo "Inserted Successfully";
	header("Location:http://localhost/NestAwayPro/login.html");

}
else{
	header("Location:http://localhost/NestAwayPro/register.html");
}

?>