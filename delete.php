<?php

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

if (isset($_GET['del'])) {
  $id = $_GET['del'];

  $sql =  $conn->prepare("DELETE FROM dish WHERE id= ?");
  $sql->bind_param("i", $id);
  $sql->execute();
}

header('Location: show.php');
exit;
$conn->close();
?>