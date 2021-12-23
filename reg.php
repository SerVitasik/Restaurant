<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Реєстрація
	</title>
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
    margin-bottom: 150px;
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

a {
	color: #000;
	font-weight: 500;
}

.a__reg {
	margin-top: 50px;
}


  </style>
</head>
<body>
	<header>
	  <div class="container">
	    <div class="header">
	      <div class="header__title">
	        <a href="#">Restaurant</a>
	        <h4 class="sub__title">Реєстрація</h4>
	       </div>
	    </div>
	  </div>
	</header>
	<div class="container">
    	<div class="forms">
			<form action="check.php" method="post">
				<input type="text" class = "form" name="login" id="login" placeholder="Введіть логін" required><br><br>
				<input type="password" class = "form" name="password" id="password" placeholder="Введіть пароль" required><br><br>
				<button type="submit" class="button">Зареєструвати</button>
			</form>
			<div class="a__reg">
				<a href="auth.php" class="button">Я вже зареєстрований</a>
			</div>
		</div>
	</div>
</body>
</html>