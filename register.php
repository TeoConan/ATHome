<?php
require($_SERVER['DOCUMENT_ROOT'] . "/athome/product/link.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="icon" type="image/png" href="res/icons/logo.ico" />
	<script type="text/javascript" src="res/vendors/jquery.min.js">
	</script>
	<title>ATHome - Inscription</title>
</head>

<body class="page-register">
	
	<div class="overlay"></div>
	
	<main class="main-register">
		<div class="inner">
			<div class="logo">
				<a href="/athome/"> 
					<img src="res/icons/logo_black.svg" alt="ATHome"/> 
				</a> 
			</div>
			
			<form class=registration>
					
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
							<input type="password" name="reg-password-conf" class="form" id="reg-password-conf" placeholder="Confirmer votre mot de passe" maxlength="40">
						</p>
					</div>
					<p class="error">Erreur de syntaxe</p>
					
					<?php
					$but_reg = new Button('Inscription', 'javascript:register()');
					$but_reg->setID('button_resgistration');
					echo($but_reg->getOutput());
					?>
				</form>
		</div>
	</main>
	
<script src="script/script.js"></script>	
	
</body>
</html>