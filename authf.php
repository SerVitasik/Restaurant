<?php
	$login = filter_var(trim($_POST['login']), 
		FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['password']), 
		FILTER_SANITIZE_STRING);

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "electronic_restaurant";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$pass = md5($pass);
	$result = $conn->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$pass'");

	$user = $result->fetch_assoc();
	// if(count($user) == 0){
	// 	echo "Користувача не знайдено";
	// 	exit();
	// }

	$admin =  $conn->query("SELECT `Admin` FROM `user` WHERE `login` = '$login' AND `password` = '$pass'");
	if($login == 'Admin'){
		header('Location: show.php');
  		exit;
	} else{
		header('Location: shownub.php');
		exit;
	} 
	$conn->close();
?>