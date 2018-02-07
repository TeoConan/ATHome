<header class="block-header">

<!-- Début Pop-up -->

<div class="pop-up" id="pop-up" style="display: none">
	<div class="overlay" id="overlay" onClick="Overlay()"></div>

	<div class="body_pop-up">
		<div class="inner">
			<img src="res/icons/logo_black.svg" class="logo" alt="logo">
			<div class="formulaire">
				<form action="connexion.php" method="post" class="connexion" style="display: flex !important;">
				<div class="mail">
					<p>
						<label for="email">User :</label>
						<input type="email" name="email" class="form" id="email" placeholder="user@athome.com" maxlength="40" autofocus>
					</p>
				</div>
				<div class="motdepasse">
					<p>
						<label for="password">Password :</label>
						<input type="password" name="password" class="form" id="password" placeholder="password" maxlength="15">
					</p>
				</div>
				<p id="text_connect"> Des champs n'ont pas étés saisi</p>
					<?php
					$but_connect = new Button('Connexion', 'javascript:connect()');
					$but_connect->setID('button_connexion');
					echo($but_connect->getOutput());
					?>
				</form>	
				<a href="#" class="inscription">Inscription</a>
				
				<!-- <form class=registration>
					
					<div class="reg-mail">
						<p>
							<input type="email" name="reg-email" class="form" id="reg-email" placeholder="e-mail de connection" maxlength="40">
						</p>
					</div>
					<p class="error">Erreur de syntaxe</p>
					
					
					<div class="reg-name">
						<p>
							<input type="text" name="reg-name" class="form" id="reg-name" placeholder="Nom & Prénom" maxlength="40">
						</p>
					</div>
					<p class="error">Erreur de syntaxe</p>
					
					<div class="reg-password">
						<p>
							<input type="password" name="reg-password" class="form" id="reg-password" placeholder="Votre mot de passe" maxlength="40">
						</p>
					</div>
					<p class="error">Erreur de syntaxe</p>
					
					<div class="reg-password confirm">
						<p>
							<input type="password" name="reg-password" class="form" id="reg-password" placeholder="Confirmer votre mot de passe" maxlength="40">
						</p>
					</div>
					<p class="error">Erreur de syntaxe</p>
					
					<?php
					$but_reg = new Button('Inscrition', 'javascript:register()');
					$but_reg->setID('button_resgistration');
					echo($but_reg->getOutput());
					?>
				</form>  -->
			</div>
		</div>
	</div>
</div>

<!-- Fin Pop-up -->


	<div class="inner-header">
		<div class="item-header">
			<a class="logos" href="/athome/">
				<img src="res/icons/logo.svg" class="logo" alt="logo">
				<h1 class="main-title">ATHome</h1>
			</a>
		</div>
		<div class="item-header">
			<nav class="nav">
				<ul>
					<li>
						<a class="magasin" href="category.php">Catégories</a>
					</li>
					<li>
						<a class="nouveautes"  href="#">Articles</a>
					</li>
					<li>
						<a class="panier" href="cart.php">Panier</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="item-header">
			<div class="search">
				<?php
							
				$connect = new Button('Se connecter', 'javascript:showPopup()');
				$connect->setID('bt_connect');
				echo($connect->getOutput());
	
				?>
				<img src="res/icons/ic_search_white_24px.svg" class="button_search" alt="search">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="script/pop-up.js"></script>
</header>