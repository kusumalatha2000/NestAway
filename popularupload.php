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
		$description=$_POST['description'];
		$link = $_POST['link'];
		$ima = "";
		
	foreach ($_FILES['myImages']['tmp_name'] as $key=>$image) {
		
		$imageName=$_FILES['myImages']['name'][$key]; 
		$imageTmpName=$_FILES['myImages']['tmp_name'][$key];
		$directory='img/';
		$ima = $ima.$imageName.',';
		$result=move_uploaded_file($imageTmpName, $directory.$imageName);
		
	}
	//echo $ima;
	$iparr = explode(",", $ima);
	if($con->query("insert into popular(id,state,place,description,link,image) values(NULL,'$state','$place','$description','$link','$ima')") === TRUE){

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




