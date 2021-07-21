<?php
session_start();
?>


<?php
//session_start();
$id=$_SESSION["id"];
// $host = "localhost";
// $dbUsername="root";
// $dbPassword="root";
// $dbName="food";
// $con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
// if(mysqli_connect_error()){
// 	die("connect error");
// }
// else{
// 	echo "Connected";
// }
// $result = $con->query("select * from veg where id=$id");
// if(($row = mysqli_fetch_assoc($result)) !== null){
// 	$itemName=$row['itemName'];
// 	$res = $con->query("delete from cart where itemName='$itemName' ");
// 	}
// 	$re = $con->query("delete from veg where id=$id");
//header("Location:http://localhost/NestAwayPro/trail.php");
//header("Location:http://localhost/TastyTouch/adminVegView.php");
echo "$id";
?>