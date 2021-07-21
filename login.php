<?php
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
session_start();

	if(ISSET($_POST['submit'])){
		$Email =$_POST['Email'];
		$Password = $_POST['Password'];
		$result = $con->query("select * from user where Email='$Email' and Password='$Password' ");
		if(($row = mysqli_fetch_assoc($result)) !== null){
			   $_SESSION["Email"] = $row['Email'];
      $_SESSION["Password"] = $row['Password'];

			if($Email == "kusumapappula2000@gmail.com" && $Password == "admin") {
				echo "<script>alert('Login Successfully!')</script>";
				header("Location:http://localhost/NestAwayPro/index1.html");
			}
			else if(isset($_SESSION["Email"])) {
    			header("Location:http://localhost/NestAwayPro/index.html");

    			}

			/*else if($fetch['Email'] == $Email && $fetch['Password'] == $Password){
				echo "<script>alert('Login Successfully!')</script>";
				header("Location:http://localhost/NestAwayPro/index.html");
			}*/
		}

		else{
			echo "invalid";
		echo "<div<script>alert('Invalid username or password')</script></div>";
			header("Location:http://localhost/NestAwayPro/login.html");
		}
	}
?>




