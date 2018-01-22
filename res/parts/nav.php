<header class="block-header">
	<div class="inner-header">
		<div class="item-header">
			<div class="logos">
				<img src="res/icons/logo.svg" class="logo" alt="logo">
				<h1 class="main-title">ATHome</h1>
			</div>
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
						<a class="panier" href="cart.php">Panier</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="item-header">
			<div class="search">
				<?php
							
				$connect = new Button('Se connecter', 'account.php');
				$connect->setID('bt_connect');
				echo($connect->getOutput());
	
				?>
				<img src="res/icons/ic_search_white_24px.svg" class="button_search" alt="search">
			</div>
		</div>
	</div>
</header>