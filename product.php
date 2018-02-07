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
		<div class="popup">
			<div class="overlay"></div>
			<div class="inner">
				<img src="res/img/architecture-2558994_1920.jpg"/>
			</div>
		</div>
		<div class="overlay">
			<div class="inner">
				<h2 class="slogan">Table moderne blanche &amp; chaises</h2>
			</div>
			
			<img class="previous" src="res/icons/ic_keyboard_arrow_left_white_24px.svg"/>
			<img class="next" src="res/icons/ic_keyboard_arrow_right_white_24px.svg"/>
			
			<img class="zoom" src="res/icons/ic_search_white_24px.svg"/>

			<div class="pagination">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>	
	</div>

	<main class="block-main">
		<div class="inner">
			<!-- Price title and add -->
			<div class="row">
				<div class="inner">
					<div class="card">
						<div class="inner">
							<div class="item title">
								<h2>Table moderne</h2>
								<h3>Gauthier 45ER82</h3>
							</div>
							
							<div class="item price">
								<div class="price">
									<h1>60<span>€</span></h1>	
								</div>
							</div>
							
							<div class="item add">
								<?php
								
								$add = new Button("Ajouter", '');
								$add->click = '';
								echo($add->getOutput());
								
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row comment-descr">
				<div class="inner">
				<!-- Tabs comment & descr -->
					<div class="systeme_onglets">
       					<div class="onglets">
            				<span class="onglet_0 onglet" id="onglet_quoi" onclick="javascript:change_onglet('quoi');">Quoi</span>
            				<span class="onglet_0 onglet" id="onglet_qui" onclick="javascript:change_onglet('qui');">Qui</span>
            				<span class="onglet_0 onglet" id="onglet_pourquoi" onclick="javascript:change_onglet('pourquoi');">Pourquoi</span>
       			 		</div>
       					<div class="contenu_onglets">
            			<div class="contenu_onglet" id="contenu_onglet_quoi">
                			<h1 class="h1">Quoi?</h1>
                				Un simple syst&egrave;me d'onglet utilisant les technologies:<br />
                			<ul class="ul">
                    		<li>(X)html</li>
                    		<li>CSS</li>
                    		<li>Javascript</li>
                			</ul>
            			</div>
            			<div class="contenu_onglet" id="contenu_onglet_qui">
                			<h1 class="h1">Qui?</h1>
                			C'est un script r&eacute;alis&eacute; par Ybouane,<br />
                			Webmaster du site <a href="http://www.supportduweb.com/">http://www.supportduweb.com/</a>
            			</div>
            			<div class="contenu_onglet" id="contenu_onglet_pourquoi">
                			<h1 class="h1">Pourquoi?</h1>
                			Pour simplifier la navigation et la diviser en parties
            			</div>
        				</div>
    				</div>	
<!--					<div class="content-tab">
						<ul class="tabs">
							<li class="tab">
								<div class="inner">
									<p>Description</p>
								</div>
							</li>

							<div class="separator"></div>

							<li class="tab">
								<div class="inner">
									<p>Avis client (2)</p>
								</div>
							</li>
						</ul>
					</div>-->
					<ul class="list-comment">
						<li class="comment-item">
							<div class="comment">
								<div class="profile">
								</div>
								
								<div class="inner">
									<div class="head">
										<h3 class="name">Marie Crack</h3>
										<p class="date">le 17/05/2018</p>
										<div class="stars-avis">
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
								<legend>AJOUTER UN AVIS</legend>
								<div class="avis">
									<textarea id="note" type="text" onclick="note.value='';" >Votre commentaire...</textarea>
									<div class="stars">
										<p class="note_name"> Note :</p>
										<img class="star" src="res/icons/ic_star_black_24px.svg"/>
										<img class="star" src="res/icons/ic_star_half_black_24px.svg"/>
										<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
										<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
										<img class="star" src="res/icons/ic_star_border_black_24px.svg"/>
									</div>
								</div>
								<?php

								$addnote = new Button('Ajouter', '');
								$addnote->setID('bt_add_note');
								echo($addnote->getOutput());

								?>
							</form>
						</div>
					</div>
					<!-- 
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
						-->
					</div>
				</div>
			</div>
			
			<div class="row_suggestions">
				<div class="inner">
					<div class="suggestions">
						<div class="titre">
							<h3 class="titre_suggestions">PRODUITS SIMILAIRES</h3>
						</div>
						<div class="produits-similaires">
						<ul class="liste-produits">
							<li class="produit">
								<?php
								$sugg1 = new Box('', "res/img/canapé-lit-mural.jpg");
								$sugg1->link = "/product.php?style=asiatique";

								echo($sugg1->getOutput());
								?>
								
								<p class="title">Canapé lit mural</p>
								<p class="price">175 €</p>
							</li>
							<li class="produit">
								<?php
								$sugg1 = new Box('', "res/img/chaise gain de place.jpg");
								$sugg1->link = "/product.php?type=chaise";

								echo($sugg1->getOutput());
								?>
								
								<p class="title">Chaises empilables</p>
								<p class="price">25 €</p>
							</li>
							<li class="produit">
								<?php
								$sugg1 = new Box('', "res/img/table-basse-chaises.jpg");
								$sugg1->link = "/product.php?type=table";

								echo($sugg1->getOutput());
								?>
								
								<p class="title">Table avec chaises emboitables</p>
								<p class="price">175 €</p>
							</li>
							<li class="produit">
								<?php
								$sugg1 = new Box('', "res/img/table-placard.jpg");
								$sugg1->link = "/product.php?type=table";

								echo($sugg1->getOutput());
								?>
								
								<p class="title">Table murale rangeable</p>
								<p class="price">35 €</p>
							</li>
						</ul>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</main>

	<?php include('res/parts/footer.php'); ?>
	
	<script type="text/javascript" src="script/script.js"></script>

</body>
</html>