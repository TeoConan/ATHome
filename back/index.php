<?php

require($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/link.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>BACK-END / ATHome</title>
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
					<?php 
				
					PDOModel::connectDB("127.0.0.1", "athome_user", "zr505CglHCODsIpG", "athome");
					
					
					
						$user = new User();
	
						$user->id = "NULL";
						$user->img_present = "../res/img/default.jpg";
						$user->img_banner = "../res/img/architecture-3121009.jpg" ;
						$user->date_registration = "2018-02-07";
						$user->adresse = "10 route de chemellier";
						$user->user_name = "Pouivet";
						$user->user_firstname ="alexandre";
						$user->user_mail ="alexpouivet@hotmail.fr";
						$user->cart = "null";
						$user->setPassword("123456abcdef");
					
					userModel::newUser($user);
					
					/* userModel::newUser($user); */
					
					/*PDOModel::insertSQL('user', '`id`, `img_present`, `img_banner`, `date_registration`, `adresse`, `user_name`, `user_firstname`, `user_mail`, `user_password`, `delivery_history_id`, `id_cart`', "NULL, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL");
					
					PDOModel::exeSQL("INSERT INTO `user` (`id`, `img_present`, `img_banner`, `date_registration`, `adresse`, `user_name`, `user_firstname`, `user_mail`, `user_password`, `delivery_history_id`, `id_cart`) VALUES (NULL, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL);");
					
					PDOModel::updateSQL('user', '4', "`img_present` = 'Bonsoireu', `img_banner` = 'Hello', `adresse` = 'cucu'");
					
					$get = PDOModel::getAllSQL("user", "*");
					echo("L'adresse de l'objet 0 : " . $get[0]->adresse);*/
					?>
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