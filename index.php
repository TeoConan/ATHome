<?php


require($_SERVER['DOCUMENT_ROOT'] . "/athome/product/link.php");


PDOModel::connectDB("127.0.0.1", "athome_user", "zr505CglHCODsIpG", "athome");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>ATHome</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="icon" type="image/png" href="res/icons/logo.ico" />
	<script type="text/javascript" src="res/vendors/jquery.min.js">
	</script>
</head>
<body class="page-home">

	<?php include('res/parts/nav.php'); ?>
	
	<div class="slider">
		<div class="overlay">
			<div class="inner">
				<h2 class="slogan"> L'ergonomie à porté de main </h2>
				<?php 
				$decouvrir = new Button('Découvrir','#');
				echo ($decouvrir->getOutput());
				?>
			</div>
		</div>	
	</div>

	<!-- ergergrge-->
	
	<!-- ergergrge-->

	<main class="block-main">
		<div class="inner">
		
			<div class="row">
				<div class="inner">
					<ul class="list-styles">
					
						<?php
						
						/* Styles */

						$styles = styleModel::getAllStyles();
						
						foreach($styles as $element){
							$out = new Box($element->label, "product/res/style/" . $element->img_present);
							$out->link = "product.php?style=" . ($element->label);
							$out->setBackground($element->color_overlay);
							
							echo('<li class="item-style">');
							echo($out->getOutput());
							echo('</li>');
						}
						
						?>
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="inner">
					<ul class="list-styles">
						<li class="item-style">
							<?php
							$table = new Box('Table', "res/img/type_table.jpg");
							$table->link = "/product.php?style=asiatique";
							//$asiat->bg_color = "rgba(107, 11, 12, 0.33)";
							$table->setBackground(167, 167, 167);

							echo($table->getOutput());
							?>
						</li>
						
						<li class="item-style">
							<?php
							$table_b = new Box('Table basse', "res/img/type_table_basse.jpg");
							$table_b->link = "/product.php?style=asiatique";
							//$asiat->bg_color = "rgba(83, 71, 65, 0.33)";
							$table_b->setBackground(154, 154, 154);

							echo($table_b->getOutput());
							?>
						</li>
						
						<li class="item-style">
							<?php
							$bed = new Box('Lit', "res/img/type_lit.jpg");
							$bed->link = "/product.php?style=asiatique";
							//$asiat->bg_color = "rgba(199, 178, 153, 0.33)";
							$bed->setBackground(218, 218, 218);

							echo($bed->getOutput());
							?>
						</li>
						
						<li class="item-style">
							<?php
							$commode = new Box('Commode', "res/img/type_commode.jpg");
							$commode->link = "/product.php?style=asiatique";
							//$asiat->bg_color = "rgba(62, 39, 35, 0.33)";
							$commode->setBackground(61,61,61);

							echo($commode->getOutput());
							?>
						</li>
						
						<li class="item-style">
							<?php
							$chair = new Box('Chaise', "res/img/type_chaise.jpg");
							$chair->link = "/product.php?style=asiatique";
							//$asiat->bg_color = "rgba(173, 20, 87, 0.33)";
							$chair->setBackground(154, 154, 154);

							echo($chair->getOutput());
							?>
						</li>
						
						<li class="item-style">
							<?php
							$asiat = new Box('Canapé', "res/img/type_canape.jpg");
							$asiat->link = "/product.php?style=asiatique";
							//$asiat->bg_color = "rgba(35, 35, 34, 0.33)";
							$asiat->setBackground(96, 57, 19);

							echo($asiat->getOutput());
							?>
						</li>
						
						<li class="item-style">
							<?php
							$asiat = new Box('Bureau', "res/img/type_bureau.jpg");
							$asiat->link = "/product.php?style=asiatique";
							//$asiat->bg_color = "rgba(38, 166, 154, 0.33)";
							$asiat->setBackground(0, 0, 0);

							echo($asiat->getOutput());
							?>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="row row-3">
				<div class="inner">
					<div class="customer-box">
						<div class="inner">
							<div class="elements">
								<h1>témoignage client</h1>
								<img src="res/icons/ic_mic_white_24px.svg"/>
								<h2>Marie Crack</h2>
							</div>
							
						</div>
						
						<img src="res/icons/ic_keyboard_arrow_left_white_24px.svg" class="left-arrow customer-nav" alt="previous"/>
						<img src="res/icons/ic_keyboard_arrow_right_white_24px.svg" class="right-arrow customer-nav" alt="previous"/>
					</div>
					
					<div class="promo-box">
						<div class="inner">
							<h1>Vous allez aimer</h1>
							<ul class="promo-list">
								<li class="promo-item">
									<a href="#">
										<div class="preview" style="background-image: url(res/img/living-room-2155376_1920.jpg);
										background-position :left center;"></div>
										<span class="title">
											Fauteuil faux cuir
										</span>
										<span class="price">90€</span>
									</a>
								</li>
								
								<li class="promo-item">
									<a href="#">
										<div class="preview" style="background-image: url(res/img/apartment-2094699_1920.jpg);"></div>
										<span class="title">
											Table moderne
										</span>
										<span class="price">60€</span>
									</a>
								</li>
								
								<li class="promo-item">
									<a href="#">
										<div class="preview" style="background-image: url(res/img/element_1.jpg);
										"></div>
										<span class="title">
											Fauteuil vintage
										</span>
										<span class="price">75€</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="row row_services">
				<div class="overlay">
					<ul class="inner_services">
						<li>
							<img src="res/icons/voiture_blanche.png" class="voiture" alt="voiture">
							<p>LIVRAISON</p>
						</li>
						<li>
							<img src="res/icons/fleur_blanche.png" class="fleur" alt="fleur">
							<p>ÉCO RESPONSABLE</p>
						</li>
						<li>
							<img src="res/icons/dollar_blanc.png" class="dollar" alt="dollar">
							<p>DONATION</p>
						</li>
						<li>
							<img src="res/icons/map_blanc.png" class="map" alt="map">
							<p>MADE IN FRANCE</p>
						</li>
					</ul>
				</div>
			</div>
	</main>

	<?php include('res/parts/footer.php'); ?>
	
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>