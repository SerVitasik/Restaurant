<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "electronic_restaurant";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if ($conn == false){
		echo "Error";
	}
?>