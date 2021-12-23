<?php

$dish_name = $_POST['dish_name'];
$price = $_POST['price'];
$image = $_POST['image'];


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

$sql = $conn->prepare("INSERT INTO Dish (dish_name, price, image)
VALUES (?, ?, ?)");
$sql->bind_param("sis", $dish_name, $price, $image);
$sql->execute();

header('Location: show.php');
exit;
$conn->close();
?>