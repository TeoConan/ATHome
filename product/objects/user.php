<?php

class User {
	
	public $id;					// Id de l'utilisateur
	public $img_present;		// Image du profil de l'utilisateur
	public $img_banner;			// Image de la bannière de l'utilisateur
	public $date_registration;	// Date d'inscription de l'utilisateur
	public $adresse;			// Adresse de l'utilisateur
	public $user_name;			// Nom de l'utilisateur	
	public $user_firstname;		// Prénom de l'utilisateur
	public $user_mail;			// Mail de l'utilisateur
	public $cart;				// Panier associé à l'utilisateur
	public $user_password;		// Mot de passe de l'utilisateur
		
	
	// retourne le mot de passe 
	public function getPassword(){
		return $this->user_password;
	} 	
	public function setPassword($user_password){
		$this->user_password = $user_password;
	}
	
	/* Exemple d'un user
	
	$user = new User();
	
	$user->id = "NULL";
	$user->img_present = "blue-2705642_1920.jpg";
	$user->img_banner = "make-up-2137800.jpg";
	$user->date_registration = "2018-02-05";
	$user->adresse = "10 rue salutations";
	$user->user_name = "crach";
	$user->user_firstname ="marie";
	$user->user_mail ="mariecrach@gmail.fr";
	$user->cart = "null";
	$user->setPassword("coucou1bébé");
	
	*/
}
?>
