<?php

require($_SERVER['DOCUMENT_ROOT'] . "/athome/product/link.php");
//var_dump($_GET);
// checker si toutes les informations sont bonnes
// mdp, décomposer nom, prénom, vérifier si une adresse mail valide
$error = false;
$mail = $_GET['regemail'];
$name = $_GET['regname'];
$password = $_GET['regpassword'];
$password_conf = $_GET['regpasswordconf'];

$regex_mail= "/^[\w\-\+]+(\.[\w\-]+)*@[\w\-]+(\.[\w\-]+)*\.[\w\-]{2,4}$/";

if(preg_match($regex_mail, $mail) == 1  && !empty($name) && $password == $password_conf ){
	$name = explode(" ", $name);
	
	$temp = "";
	
	for($i=0;$i<(sizeof($name)-1);$i++){
		$temp .= $name[$i] . " "; 
	}
	
	
	$user = new User();
	
	$user->id = "NULL";
	$user->date_registration = date('Y-m-d');
	$user->user_name = $temp;
	$user->user_firstname =$name[sizeof($name)-1];
	$user->user_mail =$mail;
	$user->cart = "null";
	$user->setPassword($password);

	userModel::newUser($user);
	//var_dump($user);
	
	userModel::connectUser($user->user_mail,$user->getPassword());
	echo('connected');
	
} else {
	echo('Error');
}
// si tout est bon, créer un objet user avec les infos
// utiliser userModel::newUser();

?>