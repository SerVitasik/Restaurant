<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "electronic_restaurant";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  $dish_id = $_GET['id'];
  $dishresult = $conn->prepare("SELECT * FROM `dish` WHERE `id` = ?");
  $dishresult->bind_param("i", $dish_id);
  $dishresult->execute();
  $dishresult = $dishresult->get_result();
  $dish = $dishresult->fetch_assoc();

  // $dish = mysqli_query($conn, query:"SELECT * FROM `dish` WHERE `id` = '$dish_id'");
  // $dish = mysqli_fetch_assoc($dish);

  // if (isset($_GET['id'])) {
  // $id = $_GET['id'];
  // echo "$id";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update</title>
<!--   <link rel="stylesheet" type="text/css" href="css/addstyle.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="icon" href="img/restaurant.png" type="image/x-icon">
  <style type="text/css">
*{
   margin: 0;
   padding: 0;
   font-family: 'Roboto', sans-serif;
  font-size: 16px;
}

a{
    text-decoration: none;
}

/* Container */

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.form {
    padding: 15px 25px;
    text-align: center;
    background-color: #fff;
    border: 3px solid #000;
    font-size: 20px;
    font-weight: 500;
}

.header {
    font-size: 20px;
    text-align: center;
    color: #fff;
}

.header h1 {
    font-size: 55px;
    text-transform: uppercase;
    font-weight: 400;
}

/*header {
    padding-bottom: 10px;
    text-align: center;
}*/
header {
    background-color: #000;
    color: #fff;
    padding: 40px;
}

.header__title a{
  color: #fff;
  font-size: 35px;
  text-transform: uppercase;
}

.button {
    padding: 25px 45px;
    border-radius: 40px;
    border: 3px solid #000;
    font-size: 20px;
    font-weight: 500;
    background-color: #fff;
}

.forms {
  padding-bottom: 10px;
  text-align: center;
} 

  </style>
</head>
<body>
<header>
  <div class="container">
    <div class="header">
      <h1 class="title">Restaurant</h1>
      <h4 class="sub__title">Редагування страв</h4>
    </div>
  </div>
</header>
  <div class="container">
    <div class="forms">
      <form action="get.php" method="post"><br><br>
        <input type="hidden" name="id" value="<?= $dish['id'] ?>">
        <input type="text" class = "form" name = "dish_name" placeholder = "dish name" value="<?=$dish['dish_name'] ?>"><br><br>
        <input type="number" value="<?= $dish['price'] ?>" class = "form" name = "price" placeholder = "price"><br><br>
        <input type="text" class = "form" name = "image" value="<?= $dish['image'] ?>" placeholder = "image"><br><br>
        <div>
          <input type="submit"  class="button" = "Update">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
