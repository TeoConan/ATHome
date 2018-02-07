<?php
require($_SERVER['DOCUMENT_ROOT'] . "/athome/product/link.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="icon" type="image/png" href="res/icons/logo.ico" />
	<title>ATHome - Inscription</title>
</head>

<body class="page-register page-error">
	
	<div class="overlay"></div>
	
	<main class="main-register">
		<div class="inner">
			<div class="logo">
				<img src="res/icons/logo_black.svg" alt="ATHome"/>
			</div>
			
			<form class=registration>
					
					<div class="error">
						<h1>Une erreur est survenu</h1>
						<p><?php echo($_GET['error'])?></p>
					</div>
					
					<?php
					$but_reg = new Button('Accueil', 'index.php');
					echo($but_reg->getOutput());
					?>
				</form>
		</div>
	</main>
</body>
</html>