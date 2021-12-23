<?php 
	include "output.php";

	$result = mysqli_query($conn, "SELECT * FROM `dish`");

	// while($dish = mysqli_fetch_assoc($result)){
	// 	// print_r($food);
	// 	echo $dish['dish_name'];
	// 	echo "<br>";
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show dish</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="img/restaurant.png" type="image/x-icon">
<!-- 	<link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<style type="text/css">

	*{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
		color: #fff;
	}

	a{
		text-decoration: none;
	}

	/* Container */

	.container {
		width: 100%;
		max-width: 1400px;
		margin: 0 auto;
	}

	header {
		background-color: #000;
	}

	/*.form {
		padding: 15px 25px;
	}*/

	.dish {
		display: grid;
		grid-template-columns: 24% 24% 24% 24%;
		padding-top: 50px;
	}

	.dish__item {
		margin: 30px 15px 0;
		font-family: 'Poppins', sans-serif;
		font-size: 18px;
		position: relative;
	}

	.dish__a a{
		text-transform: uppercase;
		margin-right: 210px;
		font-size: 25px;
		color: #000;
	}

	.dish__p p{
		padding-top: 10px;
		padding-left: 25px;
		color: #000;
	}

	.dish__item:hover .img {
	transform: translate3d(-10px, -10px, 0);
	}

	.dish__item:hover .img img{
	opacity: .2;
	}

.dish__item:hover .dish__a .dish__p {
	opacity: 1;
}

.about__img img {
	display: block;
	transition: opacity .2s linear;
}

	.img {
		background: linear-gradient(to bottom, #000, #000);
		transition: transform .2s linear;
	}

	.img img {
		display: block;
		transition: opacity .2s linear;
	}

	.dish__item:hover .dish__text{
		opacity: 1;
	}

	.dish__item:hover .dish__textu{
		opacity: 1;
	}

	.dish__text {

		color: #fff;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 15px;
		text-align: center;
		opacity: 0;
		border: 2px solid #fff;
		padding: 6px 15px;
		text-align: center;


		position: absolute;
		top: 25%;
		left: 30%;
		z-index: 2;
		transform: translate3d(0, -50%, 0);
		transition: opacity .5s linear;
	}

	.dish__text: hover {
		background-color: #fff;
	}

	.dish__textu {

		color: #fff;
		text-transform: uppercase;
		font-weight: 400;
		font-size: 15px;
		text-align: center;
		opacity: 0;
		border: 2px solid #fff;
		padding: 6px 15px;
		text-align: center;


		position: absolute;
		top: 42%;
		left: 27.5%;
		z-index: 2;
		transform: translate3d(0, -50%, 0);
		transition: opacity .5s linear;
	}

	.dish__textu: hover {
		background-color: #fff;
	}


/*
	/*Nav*/

	header {
		padding: 50px 0 70px 45px;
	}
*/
	.nav__link {
		margin-top: 75px;
		margin: 50px 0 50px 50px;
		font-size: 25px;
		text-align: right;
		color: #fff;
	}

	.header__info {
		display: flex;
		justify-content: space-between;
	}

	nav a{
		color:  #fff;
		padding-right: 30px;
	}

	.header__title a{
		color: #fff;
		text-transform: uppercase;
		font-size: 30px;
		font-weight: 700;
	}

	footer {
		margin-top: 50px;
		background-color: #000;
		padding:  50px 100px;
	}

	</style>
</head>
<body>
	<header>
		<div class="container">
			<div class="header__info">
				<div class="header__title">
					<a href="#">Restaurant</a>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="container">
			<div class="dish">
				<?php 
					while($dish = mysqli_fetch_assoc($result)){
						?>
						<div class="dish__item">
							<img class = "img" src="<?php echo $dish['image'] ?>" width="300" height="180">
							<div class="dish__a">
								<a href = "#"><?php echo $dish['dish_name']; ?></a>
							</div>
							<div class="dish__p">
								<p>Ціна страви - <?php echo $dish['price']; ?></p>
							</div>
						</div>
						<?php
					}
				 ?>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			Project by Vitasik -_-
		</div>
		
	</footer>
</body>
</html>