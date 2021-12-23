<?php
	$login = filter_var(trim($_POST['login']), 
		FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), 
		FILTER_SANITIZE_STRING);
	
	$admin = 0;
	if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
		echo "Неправильний розмір логіну";
		exit();
	} else if(mb_strlen($password) < 5 || mb_strlen($password) > 90){
		echo "Неправильний розмір пароля";
		exit();
	}


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "electronic_restaurant";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection


	$password = md5($password);

	$conn->query("INSERT INTO `user` (`login`, `password`, `Admin`) VALUES('$login', '$password', '$admin')");
	header('Location: reg.php');
	exit;
	$conn->close();
?>