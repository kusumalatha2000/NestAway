<html>
<head>
        <meta charset="utf-8">
        <title>NEST AWAY</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
    
</head>
    <body>
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">NEST AWAY</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="hotels.php" class="nav-item nav-link">Restaurants</a>
                        <a href="popularplaces.php" class="nav-item nav-link">PopularPlaces</a>
                        <a href="house.php" class="nav-item nav-link">RentHouse</a>
                        <a href="register.html" class="nav-item nav-link active">Register</a>
                        <div class="nav-item dropdown">
                            <a href="login.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu">
                                <a href="login.html" class="dropdown-item">Login</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
<?php
$id = $_GET['id'];
$host = "localhost";
$dbUsername="root";
$dbPassword="Kusuma@2000";
$dbName="nest";
$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_error()){
	die("connect error");
}
//else{
	//echo "Connected";
//}
//$result = $con->query("select * from hotels where id=$id");
if($stmt = $con->query("select * from hotels where id=$id")){

 echo "<table border=\"1\" class='table my_table'>

		<tr class='info'>
			 <th> Image </th>
			 <th>HotelName</th>
			 <th>State</th>
			 <th>Place</th>
			 <th>NearBy</th>
		</tr>";

		while ($row = $stmt->fetch_assoc()) {
			echo "<tr>
				<td><img src=img/$row[image]></td>
				<td>$row[hotelname]</td>
				<td>$row[state]</td>
				<td>$row[place]</td>
				<td>$row[nearby]</td>
			</tr>";
  		}

	echo "</table>";
}


?>
</body>
</html>