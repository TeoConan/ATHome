<?php

require("res/elements/box.php");
require("res/elements/button.php");
require("res/elements/cart_item.php");

$command = new Button('Commander','#');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>ATHome - Récapitulatif</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="icon" type="image/png" href="res/icons/logo.ico" />
</head>
<body class="page-checkout">
	
	<div class="slider">
		<div class="overlay">
			<div class="inner">
				<h1 class="slogan">Finaliser votre commande</h1>
			</div>
		</div>	
	</div>

	<main class="block-main">
		<div class="inner">
			<div class="card-checkout">
				<h1>Votre commande</h1>
				
				<p>Vos articles :</p>
				
				<table class="articles">
					<tr>
						<td class="label">Table basse Gauthier 5f6eeS</td>
						<td class="price">67<span>€</span></td>
					</tr>
					
					<tr>
						<td class="label">Table basse Gauthier 5f6eeS</td>
						<td class="price">67<span>€</span></td>
					</tr>
					
					<tr>
						<td class="label">Table basse Gauthier 5f6eeS</td>
						<td class="price">67<span>€</span></td>
					</tr>
					
					<tr>
						<td class="label">Table basse Gauthier 5f6eeS</td>
						<td class="price">67<span>€</span></td>
					</tr>
					
					<tr>
						<td class="total-price"><p>Total : </p></td>
						<td class="price">268<span>€</span></td>
					</tr>
				</table>
				
				<p>Paiement par carte bancaire : </p>
				
				<form class="pay-form">
				
				<div class="row">
					<div class="input owner">
						<label for="card_owner">Titulaire de la carte :</label>
						<input type="text" placeholder="Titulaire" name="card_owner" id="card_owner"/>
					</div>
					
					<div class="input number">
						<label for="card_number">Numéro de la carte :</label>
						<input type="text" id="card_number" placeholder="Numéro" name="card_number" maxlength="16" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
						</input>
					</div>
					
					<div class="input date">
						<label for="card_expire">Date d'expiration :</label>
						<input type="month" id="card_expire" name="card_expire">
					</div>
				</div>
				
				<div class="row">
					<div class="input cvv">
						<label for="card_cvv">CVV :</label>
						<input type="text" placeholder="CVV"  name="card_cvv" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
						</input>
					</div>
				</div>
				
				<div class="row">
					<div class="card_valid">
						<?php

						$validcard = new Button('Ajouter la carte', '#');
						echo($validcard->getOutput());

						?>
					</div>
				</div>
				
				
					<!--<div class="row">
						<div class="input owner">
							<label for="card_owner">Titulaire de la carte :</label>
							<input type="text" name="card_owner"/>
						</div>
						<div class="input number">
							<label for="card_number">Numéro de la carte :</label>
							<input type="text" name="card_number" maxlength="16" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							</input>
						</div>
						<div class="input date">
							<label for="card_expire">Date d'expiration :</label>
							<input type="date" min="2018-01-22" name="card_expire">
						</div>
					</div>
					
					<div class="row">
						<div class="input cvv">
							<label for="card_cvv">Numéro de la carte :</label>
							<input type="text" name="card_cvv" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							</input>
						</div>
						
						<div class="card_valid">
							<?php

							$validcard = new Button('Vérifier', '#');
							echo($validcard->getOutput());

							?>
						</div>
					</div>-->
					
					
				</form>
				
				<div class="command">
					<?php	echo ($command->getOutput());		?>
				</div>
			</div>
			
		</div>
	</main>

</body>
</html>






































