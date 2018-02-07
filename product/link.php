<?php
/* DB 

	Host		: 127.0.0.1
	User		: athome_user
	Password	: zr505CglHCODsIpG
	DB			: athome


*/



/* Graphic */
require_once($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/res/elements/box.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/res/elements/button.php");

/* Models */
require_once($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/models/pdoModel.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/models/userModel.php");

/* Objects*/
require_once($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/objects/user.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/objects/cart.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/projet/athome/product/objects/cartRelation.php");

?>