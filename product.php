<?php

require("res/elements/box.php");
require("res/elements/button.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>ATHome - [MEUBLE]</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="icon" type="image/png" href="res/icons/logo.ico" />
	<script type="text/javascript" src="res/vendors/jquery.min.js">
	</script>
</head>
<body class="page-product">

	<?php include('res/parts/nav.php'); ?>
	
	<div class="slider">
		<div class="overlay">
			<div class="inner">
				<h2 class="slogan">Table moderne blanche &amp; chaises</h2>
			</div>
			
			<img class="previous" src="res/icons/ic_keyboard_arrow_left_white_24px.svg"/>
			<img class="next" src="res/icons/ic_keyboard_arrow_right_white_24px.svg"/>

			<div class="pagination">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot selected"></div>
				<div class="dot"></div>
			</div>
		</div>	
	</div>

	<main class="block-main">
		<div class="inner">
			<!-- Price title and add -->
			<div class="row">
				<div class="inner">
					
				</div>
			</div>
			
			<div class="row">
				<div class="inner">
				<!-- Tabs comment & descr -->
					<ul class="tabs">
						<li class="tab">
							<div class="inner">
								<p>Description</p>
							</div>
						</li>
						
						<li class="tab">
							<div class="inner">
								<p>Avis client (2)</p>
							</div>
						</li>
					</ul>
					<ul class="list-comment">
						<li class="comment-item">
							<div class="comment">
								<div class="profile">
									<img src="res/img/blue-2705642_1920.jpg" class="mini rounded"/>
								</div>
								
								<div class="inner">
									<div class="head">
										<h3 class="name">Marie Crack</h3>
										<p class="date">le 17/05/2018</p>
										<div class="stars">
											<img class="star" src="res/icons/ic_star_black_24px.svg"/>
											<img class="star" src="res/icons/ic_star_half_black_24px.svg"/>
											<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
											<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
											<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
										</div>
									</div>
									
									<div class="descr">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac lacinia leo, in lobortis quam. Nulla sed volutpat erat. Phasellus porta laoreet lectus id lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec ut erat porta, congue mauris vitae, venenatis nisi.</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="inner">
					<div class="add-note">
						<div class="inner">
							<form>
								<input id="note" type="text"/>
								<div class="stars">
									<img class="star" src="res/icons/ic_star_black_24px.svg"/>
									<img class="star" src="res/icons/ic_star_half_black_24px.svg"/>
									<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
									<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
									<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
								</div>
								
								<?php

								$addnote = new Button('Ajouter', '');
								$addnote->setID('bt_add_note');
								echo($addnote->getOutput());

								?>
							</form>
						</div>
					</div>
					
					<div class="services">
						<div class="inner">
							<h3>services disponibles</h3>
							<div class="list">
								<div class="row">
									<div class="item">
										<img src="res/icons/ic_directions_car_white_24px.svg"/>
										<p>Livraison</p>
									</div>
									
									<div class="item">
										<img src="res/icons/ic_directions_car_white_24px.svg"/>
										<p>Livraison</p>
									</div>
								</div>
								
								<div class="row">
									<div class="item">
										<img src="res/icons/ic_directions_car_white_24px.svg"/>
										<p>Livraison</p>
									</div>
									
									<div class="item">
										<img src="res/icons/ic_directions_car_white_24px.svg"/>
										<p>Livraison</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="inner">
					<div class="suggestions">
						<h3>produits similaires</h3>
						
						<ul>
							<li>
								<?php
								$sugg1 = new Box('', "res/img/canapé-lit-mural.jpg");
								$sugg1->link = "/product.php?style=asiatique";

								echo($sugg1->getOutput());
								?>
								
								<p class="title">Canapé lit mural</p>
								<p class="price">175 €</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</main>

	<?php include('res/parts/footer.php'); ?>
	
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>