<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="../res/vendors/jquery.min.js"></script>
        <title></title>
    </head>

    <body>
    
    <div class="content">
    	<div class="rate-stars" id="rate-stars" style="display: flex;">
    		<img class="star" src="../res/icons/ic_star_border_black_24px.svg"/>
    		<img class="star" src="../res/icons/ic_star_border_black_24px.svg"/>
    		<img class="star" src="../res/icons/ic_star_border_black_24px.svg"/>
    		<img class="star" src="../res/icons/ic_star_border_black_24px.svg"/>
    		<img class="star" src="../res/icons/ic_star_border_black_24px.svg"/>
    	</div>
    </div>
    
    <div class="content">
    	<div style="display: flex;">
    		<img class="star" src="../res/icons/ic_star_border_black_24px.svg"/>
    		<img class="star" src="../res/icons/ic_star_black_24px.svg"/>
    		<img class="star" src="../res/icons/ic_star_half_black_24px.svg"/>
    	</div>
    </div>
    
    
    <div class="content">
    	
    	<a href="" class="box">
    		<div class="inner">
    			<span class="title">Asiatique</span>
    		</div>
    	</a>
    	
    	<a href="" class="box large">
    		<div class="inner">
    			<span class="title">Commandes</span>
    		</div>
    		
    		<span class="sub-title">Suivi &amp; Historique</span>
    	</a>
    	
    	<?php 
		
		require('../res/elements/box.php');
		require('../res/elements/button.php');
		
		$box = new Box('Coucou', '../res/img/japan-2014618_1920.jpg');
		$box->bg_color = 'rgba(0,0,0,0.33)';
		$box->subtitle = 'Hello';
		$box->link = 'google.fr';
		$box->setID('bt1');
		
		echo($box->getOutput());
		
		$large = new Box('Large', '../res/img/truck-2591007_1920.jpg', Box::BOX_TYPE_LARGE);
		$large->subtitle = 'Soutitreu';
		$large->addstyle = 'background-position : 40% center;';
		
		echo($large->getOutput());
		
		//$large->printInfo();
		
		?>
    	
    </div>
    
    <?php
		
		$asiat = new Box('Asiatique', "../res/img/style_asiatique.jpg");
		$asiat->link = "/product.php?style=asiatique";
		$asiat->bg_color = "rgba(107, 11, 12, 0.33)";
		
		echo($asiat->getOutput());
		
		?>
    
	<div class="content">
		
		<a href="#" class="button" id="button1" onClick="">
			<span>Découvrir</span>
		</a>
		
		<?php
		
		$but1 = new Button('Yop', 'yop.fr');
		//$but1->addstyle = 'background-color : red;';
		
		echo($but1->getOutput());
		
		?>
		
	</div>
	
	<div class="content">
		
		<div class="box">
			
		</div>
		
	</div>
	
	<script src="script.js"></script>
		
    </body>
</html>