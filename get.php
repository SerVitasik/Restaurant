<?php 
  

  $dish_id = $_POST['id'];
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

  $sql = "UPDATE `dish` SET `dish_name` = '$dish_name', `price` = '$price', `image` = '$image' WHERE `dish`.`id` = '$dish_id'";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  header('Location: show.php');
  exit;
?>