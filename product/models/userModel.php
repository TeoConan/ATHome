<?php

class userModel {
	
	
	// Créer un nouvel utilisateur 
	public function newUser($user){
		
		PDOModel::insertSQL('user',
										'`id`,
										`img_present`,
										`img_banner`,
										`date_registration`,
										`adresse`,
										`user_name`,
										`user_firstname`,
										`user_mail`,
										`user_password`,
										`delivery_history_id`,
										`id_cart`'
										,
										$user->id . ", '" . 
										$user->img_present ."', '" . 
										$user->img_banner . "', '" . 
										$user->date_registration ."', '" . 
										$user->adresse ."', '" . 
										$user->user_name ."', '" . 
										$user->user_firstname ."', '". 
										$user->user_mail ."', '" . 
										$user->getPassword() ."', NULL, " . 
										$user->cart ." ");
		
	}	

	
	public function getUser($id_mail){

	}	

	public function connectUser($mail,$password){

	}		

	public function getCurrentUser(){
		return ($_SESSION['user']);
	}		

	public function updateUser($user){

	}		

	public function disconnectUser(){
		unset($_SESSION['user']);
		header("Refresh:0; url=/projet/athome/");
	}
	
}
?>