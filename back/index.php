<?php

require($_SERVER['DOCUMENT_ROOT'] . "/athome/product/link.php");


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
					
					$get = PDOModel::getAllSQL("user", "*");
					echo("L'adresse de l'objet 0 : " . $get[0]->adresse);
					
					
						$piece = new Piece();
						$piece->img_present	= "element_1.jpg";
						$piece->img_slide	= array(
												"furniture-2603068_1920.jpg",
												"living-room-2155376_1920.jpg",
												"living-room-2583032_1920.jpg"
											);
						$piece->ref			= "55QG";
						$piece->label		= "Chaise ";
						$piece->brand		= "Gauthier";
						$piece->stock		= 16;
						$piece->services	= array(
												"livraison"	=>	false,
												"donation"	=>	true,
												"eco"		=>	false,
												"made"		=>	true,
											);
						$piece->price		= 79;
						$piece->dimensions	= array(
												"largeur"	=>	188,
												"hauteur"	=>	288,
											);
						$piece->style		= 2;
						$piece->type		= 3;
					
					//pieceModel::newPiece($piece);
					
					$current = pieceModel::getPiece(0);

					var_dump($current);

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