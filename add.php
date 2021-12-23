<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Insert to db</title>
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
}

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
      <div class="header__title">
        <a href="#">Restaurant</a>
        <h4 class="sub__title">Додавання страв</h4>
       </div>
    </div>
  </div>
</header>
   <div class="container">
    <div class="forms">
      <form action="post.php" method="post"><br><br>
        <input type="text" class = "form" name = "dish_name" placeholder = "dish name"><br><br>
        <input type="number" class = "form" name = "price" placeholder = "price"><br><br>
        <input type="text" class = "form" name = "image" placeholder = "image"><br><br>
        <div>
          <input type="submit"  class="button" value="Додати страву">
         
        </div>
      </form>
    </div>
  </div>
</body>
</html>