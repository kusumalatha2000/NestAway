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
	if($con->query("insert into popularplace                                id,state,place,street,imageName) values(NULL,'$state','$place','$street','$ima')") === TRUE){

	echo "Inserted Successfully";
	echo '<div><script>alert("uploaded")</script></div>';
  
	header("Location:http://localhost/NestAwayPro/index.html");
}
else{
	echo "Insert failed";
}
	if($result){
		echo "Image Uploaded SuccessFully";
	}
}
?>




