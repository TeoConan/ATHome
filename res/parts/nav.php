<header class="block-header">
<!-- Début Pop-up -->

<div class="pop-up" id="pop-up" style="display: none">
	<div class="overlay" id="overlay" onClick="Overlay()"></div>
	<div class="body_pop-up">
		<div class="inner">
			<img src="res/icons/logo_black.svg" class="logo" alt="logo">
			<div class="formulaire">
				<form action="connexion.php" method="post">
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
			</div>
		</div>
	</div>
</div>

<!-- Fin Pop-up -->


	<div class="inner-header">
		<div class="item-header">
			<a class="logos" href="/projet/athome/">
				<img src="res/icons/logo.svg" class="logo" alt="logo">
				<h1 class="main-title">ATHome</h1>
			</a>
		</div>
		<div class="item-header">
			<nav class="nav">
				<ul>
					<li>
						<a class="magasin" href="#">Magasin</a>
					</li>
					<li>
						<a class="nouveautes"  href="#">Nouveautés</a>
					</li>
					<li>
						<a class="panier" href="#">Panier</a>
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
	<script type="text/javascript" src="res/vendors/jquery.min.js">
	</script>
	<script type="text/javascript" src="script/pop-up.js"></script>
</header>