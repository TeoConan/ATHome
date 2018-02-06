<?php
require($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/link.php");
//require_once("/product/objects/user.php");
//Faux current user

PDOModel::connectDB("127.0.0.1", "athome_user", "zr505CglHCODsIpG", "athome");

//userModel::connectUser("mariecrach@gmail.fr","coucou1bebe");

$current = $_SESSION['user'];

//Check
$error = false;
if(
	empty($current->user_mail) ||
	empty($current->user_firstname) ||
	empty($current->user_name)
) {
	$error = true;
	header('Location: error.php');
} else {
	
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>ATHome - Compte</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="icon" type="image/png" href="res/icons/logo.ico" />
	<script type="text/javascript" src="res/vendors/jquery.min.js"></script>
</head>
<body class="page-account">

	<?php include('res/parts/nav.php'); ?>

	<div class="profile">
		<div class="preview" style="background-image: url(product/res/user/banner/<?php echo($current->img_banner); ?>);"></div>
		<div class="customer" style="background-image: url(product/res/user/profil/<?php echo($current->img_present); ?>);">
		</div>
	</div>

	<main class="block-main">
		<div class="inner">
			<div class="row">
				<div class="box-info">
					<h1><?php echo(ucfirst($current->user_firstname)); ?></h1>
					<h2><?php echo(ucfirst($current->user_name)); ?></h2>
					<div class="separator"></div>
					<div class="inscription">
						<img src="res/icons/ic_account_circle_green_24px.svg"/>
						<p>Inscrite depuis le <?php echo($current->date_registration); ?></p>
					</div>
					
					<div class="livraison">
						<img src="res/icons/ic_pin_drop_green_24px.svg"/>
						<?php
							if (!empty($current->adresse)){
								echo('<p>1 adresse de livraison</p>');
							} else {
								echo('<p>aucune adresse de livraison</p>');
							}
						?>
						
					</div>
					
					<div class="cart">
						<img src="res/icons/ic_shopping_cart_green_24px.svg"/>
						<p>14 articles dans le panier</p>
					</div>
				</div>
				
				<?php
				
				$adresses = new Box('Adresse', "res/img/japan-2014618_1920.jpg" , Box::BOX_TYPE_LARGE);
				$adresses->subtitle = 'Livraisons & cadeaux';
				$adresses->link = '/adresses';
				$adresses->setBackground(0,0,0);
				echo($adresses->getOutput());
				
				?>
			</div>
			
			<div class="row">
				<?php
				
				$command = new Box('Commandes', "res/img/truck-2591007_1920.jpg", Box::BOX_TYPE_LARGE);
				$command->subtitle = 'Suivi & Historique';
				$command->link = '/commands';
				$command->setBackground(0,0,0);
				echo($command->getOutput());
				
				
				$paid = new Box('Paiement', "res/img/queen-937501_1920.jpg" , Box::BOX_TYPE_LARGE);
				$paid->subtitle = 'Carte bancaire & Codes';
				$paid->link = '/paid';
				$paid->setBackground(0,0,0);
				echo($paid->getOutput());
				
				?>
			</div>
			
			<div class="row">
				<?php
				
				$cart = new Box('Panier', "res/img/basket-2246734_1920.jpg", Box::BOX_TYPE_LARGE);
				$cart->subtitle = 'Promotions & Disponibilité';
				$cart->link = '/cart';
				$cart->setBackground(0,0,0);
				echo($cart->getOutput());
				
				
				$settings = new Box('Paramètres', "res/img/cup-of-coffee-1280537_1920.jpg" , Box::BOX_TYPE_LARGE);
				$settings->subtitle = 'Compte & Confidentialité';
				$settings->link = '/settings';
				$settings->setBackground(0,0,0);
				echo($settings->getOutput());
				
				?>
			</div>
		</div>
	</main>
	<?php include('res/parts/footer.php'); ?>
	<script type="text/javascript" src="script/script.js"></script>
</body>
</html>