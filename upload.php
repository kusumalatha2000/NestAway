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
		$state=$_POST['state'];
		$place=$_POST['place'];
		$street=$_POST['street'];
		$housename=$_POST['housename'];
		$Gender = $_POST['Gender'];
		$MaritalStatus = $_POST['MaritalStatus'];
		$Rent = $_POST['Rent'];
		$ima = "";
		
	foreach ($_FILES['myImages']['tmp_name'] as $key=>$image) {
		
		$imageName=$_FILES['myImages']['name'][$key]; 
		$imageTmpName=$_FILES['myImages']['tmp_name'][$key];
		$directory='img/';
		//echo $imageName;
		$ima = $ima.$imageName.',';
		$result=move_uploaded_file($imageTmpName, $directory.$imageName);
	}
	//echo $ima;
	$iparr = explode(",", $ima);
	echo $iparr[0] ." " .$iparr[1];
	if($con->query("insert into house(id,state,place,street,housename,Gender,MaritalStatus,Rent,imageName) values(NULL,'$state','$place','$street','$housename','$Gender','$MaritalStatus','$Rent','$ima')") === TRUE){

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




