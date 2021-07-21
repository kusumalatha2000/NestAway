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


if(isset($_POST['upload'])){
	foreach ($_FILES['myImages']['tmp_name'] as $key=>$image) {
		$state=$_POST['state'];
		$place=$_POST['place'];
		$nearby=$_POST['nearby'];
		$hotelname=$_POST['hotelname'];	
		$imageName=$_FILES['myImages']['name'][$key]; 
		$imageTmpName=$_FILES['myImages']['tmp_name'][$key];
		$directory='img/';
		$result=move_uploaded_file($imageTmpName, $directory.$imageName);
		
	}
	if($con->query("insert into hotels(   id,hotelname,state,place,nearby,image) values(NULL,'$hotelname','$state','$place','$nearby','$imageName')") === TRUE){

	echo "Inserted Successfully";
	echo '<script>alert("uploaded")</script>';
	header("Location:http://localhost/NestAwayPro/index1.html");
}
else{
	echo "Insert failed";
}
	if($result){
		echo "Image Uploaded SuccessFully";
	}
}
?>




