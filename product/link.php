<?php
/* DB 

	Host		: 127.0.0.1
	User		: athome_user
	Password	: zr505CglHCODsIpG
	DB			: athome


*/

if (session_status() == PHP_SESSION_NONE) {
    session_start();
	//unset($_SESSION['user']);
}


/* Graphic */
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/res/elements/box.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/res/elements/button.php");

/* Models */
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/models/pdoModel.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/models/userModel.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/models/styleModel.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/models/typeModel.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/models/pieceModel.php");

/* Objects*/
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/objects/piece.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/objects/user.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/objects/cart.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/objects/type.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/objects/style.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/athome/product/objects/cartRelation.php");

PDOModel::connectDB("127.0.0.1", "athome_user", "zr505CglHCODsIpG", "athome");
?>