<?php

    session_start();
    if(!ISSET($_SESSION['Email'])){
        header("Location:http://localhost/NestAwayPro/login.html");
    }
	session_destroy();
	header("Location:http://localhost/NestAwayPro/index.html");

?>
