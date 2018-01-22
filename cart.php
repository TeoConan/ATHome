<?php

require("res/elements/box.php");
require("res/elements/button.php");
require("res/elements/cart_item.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>ATHome - Panier</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="icon" type="image/png" href="res/icons/logo.ico" />
</head>
<body class="page-cart">

	<?php include('res/parts/nav.php'); ?>
	
	<div class="slider">
		<div class="overlay">
			<div class="inner">
				<h2 class="slogan"> L'ergonomie à porté de main </h2>
				<?php 
				$command = new Button('Commander','checkout.php');
				echo ($command->getOutput());
				?>
			</div>
		</div>	
	</div>

	<main class="block-main">
		<div class="inner">
			<h1 class="total-price">275<span>€</span></h1>
			
			<div class="cart-items-list">
				<div class="cart-item">
					<div class="inner">
						
						<div class="price">
							<h1>67€</h1>
						</div>
						
						<div class="separator"></div>						
						<div class="preview">
						</div>
						
						<div class="text">
							<h2>Table basse Gauthier 588F5</h2>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
						
						<div class="services">
							<div class="item">
								<img src="res/icons/ic_monetization_on_white_24px.svg"/>
							</div>
							
							<div class="item">
								<img src="res/icons/ic_pin_drop_white_24px.svg"/>
							</div>
							
							<div class="item">
								<img src="res/icons/ic_local_florist_white_24px.svg"/>
							</div>
							
							<div class="item">
								<img src="res/icons/ic_directions_car_white_24px.svg"/>
							</div>
						</div>
						
						<div class="amount">
							<p>Quantité : 2</p>
						</div>
						
						<div class="close">
							<img src="res/icons/ic_clear_black_24px.svg"/>
						</div>
					</div>
				</div>
				
				<div class="cart-item">
					<div class="inner">
						
						<div class="price">
							<h1>70€</h1>
						</div>
						
						<div class="separator"></div>						
						<div class="preview">
						</div>
						
						<div class="text">
							<h2>Fauteuil Gauthier 588F5</h2>
							<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
						</div>
						
						<div class="services">
							<div class="item">
								<img src="res/icons/ic_monetization_on_white_24px.svg"/>
							</div>
							
							<div class="item">
								<img src="res/icons/ic_directions_car_white_24px.svg"/>
							</div>
						</div>
						
						<div class="amount">
							<p>Quantité : 2</p>
						</div>
						
						<div class="close">
							<img src="res/icons/ic_clear_black_24px.svg"/>
						</div>
					</div>
				</div>
			</div>
			
			<div class="command">
				<?php	echo ($command->getOutput());		?>
			</div>
		</div>
	</main>

	<?php include('res/parts/footer.php'); ?>

</body>
</html>






































