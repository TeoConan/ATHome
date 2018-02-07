<?php

class Piece
{
	public $id;				//Id de la piece
	public $img_present;	//nom du fichier de présentation
	public $img_slide;		//nom des fichiers pour le slider	image.jpg;image.jpg;...
	public $ref;			//Reference du meuble
	public $label;			//Nom du meuble
	public $brand;			//Marque du meuble
	public $stock;			//Nombre de pieces disponible
	public $services;		//Tableau des service	livraison = false...
	public $price;			//Prix
	public $dimensions;		//Tableau des dimensions
	public $style;			//Objet style appartenant
	public $type;			//Objet type appartenant
	
	/*
	
	$piece = new Piece();
	$piece->id			= 21;
	$piece->img_present	= "element_1.jpg";
	$piece->img_slide	= array(
							"furniture-2603068_1920.jpg",
							"living-room-2155376_1920.jpg",
							"living-room-2583032_1920.jpg"
						);
	$piece->ref			= "55QG";
	$piece->label		= "Table ";
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
	
	*/
}
?>