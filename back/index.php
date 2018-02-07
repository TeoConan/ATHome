<?php

require($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/link.php");


//require_once("../product/objects/piece.php");
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
<<<<<<< HEAD
					
					
					
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
=======
					PDOModel::connectDB("127.0.0.1", "athome_user", "zr505CglHCODsIpG", "athome");
>>>>>>> 34a79b7b5bae1141c2b3b03de2d4a0c695d8240d
					
					/*PDOModel::insertSQL('user', '`id`, `img_present`, `img_banner`, `date_registration`, `adresse`, `user_name`, `user_firstname`, `user_mail`, `user_password`, `delivery_history_id`, `id_cart`', "NULL, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL");
					
					PDOModel::exeSQL("INSERT INTO `user` (`id`, `img_present`, `img_banner`, `date_registration`, `adresse`, `user_name`, `user_firstname`, `user_mail`, `user_password`, `delivery_history_id`, `id_cart`) VALUES (NULL, 'sfbdg,h;jk', 'fbdg,h;jk', '2018-01-10', 'sfdgbdfnh,j', 'dfvergbnth,yjk;', 'vfegbr,tjhyu', 'dcfvgbrhnty,juk;', 'd fghjkl', NULL, NULL);");
					
					PDOModel::updateSQL('user', '4', "`img_present` = 'Bonsoireu', `img_banner` = 'Hello', `adresse` = 'cucu'");*/
					
					//$get = PDOModel::getSQL("piece", "*");
					//var_dump($get);
					
					
					$piece = new Piece();
					$piece->id			= 18;
					$piece->img_present	= "element.jpg";
					$piece->img_slide	= array(
											"furniture-2603068_1920.jpg",
											"living-room-2155376_1920.jpg",
											"living-room-2583032_1920.jpg"
										);
					$piece->ref			= "55QG";
					$piece->label		= "fauteil ";
					$piece->brand		= "Gauthier";
					$piece->stock		= 16;
					$piece->services	= array(
											"livraison"	=>	false,
											"donation"	=>	true,
										);
					$piece->price		= 79;
					$piece->dimensions	= array(
											"largeur"	=>	188,
											"hauteur"	=>	288,
										);
					$piece->style		= null;
					$piece->type		= null;
					
					//pieceModel::newPiece($piece);				
					//var_dump($piece);
					//var_dump(pieceModel::getPiece(17));
					
					//pieceModel::updatePiece($piece);
					
					
					print_r(styleModel::getAllStyles());
					
					//Get
					
					//echo(pieceModel::deletePiece(18));
					
					//echo(PDOModel::deleteSQL('user', '`id` = 7'));
					
					
					
					
					?>
				</div>
<<<<<<< HEAD
				<div class="error">
					<p>Erreurs</p>
				</div>
=======
>>>>>>> 34a79b7b5bae1141c2b3b03de2d4a0c695d8240d
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