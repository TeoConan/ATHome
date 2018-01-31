<?php

require("../res/elements/box.php");
require("../res/elements/button.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>ATHome</title>
	<link rel="stylesheet" href="back.css"/>
	<link rel="icon" type="image/png" href="../res/icons/logo.ico" />
</head>
<body class="page-home">
	<main>
		<section>
			<h1>Back office</h1>
			<div class="content">
				
			</div>
		</section>
		
		<section>
			<p>Console</p>
			<div class="content">
				<div class="follow">
					<p>Suivi</p>
				</div>
				
				<div class="error">
					<p>Erreurs</p>
				</div>
			</div>
		</section>
		
		<section>
			<p>Commandes</p>
			<div class="content">
				<button class="">Ajouter</button>
			</div>
		</section>
		
		<section>
			<p>Input</p>
			<div class="content">
				<form>
					<input placeholder="Text" type="text"/>
					<div class="flex">
						
					</div>
				</form>
			</div>
		</section>
	</main>
	
	<script type="text/javascript" src="../res/vendors/jquery.min.js">
	</script>
	<script type="text/javascript" src="../script/pop-up.js"></script>
</body>
</html>