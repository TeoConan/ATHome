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
		
		$regexp_id = is_numeric($id_mail);
		$output = null;

		if(!$regexp_id){
			$get = PDOModel::getSQL("user", "*", "`user_mail` = ". $id_mail);
			
		}else {
			$get = PDOModel::getSQL("user", "*", "`id` = ". $id_mail);			
		}
		
		if(!empty($get)){
			$output = self::convertObjToUser($get);
		}
		return $output;
	}	

	//Convertir un objet strClass en Piece
	private function convertObjToUser($obj){
		$output = new User();
		
		if(!empty($obj->id)){
			$output->id = $obj->id;
		}
		
		if(!empty($obj->img_present)){
			$output->img_present = $obj->img_present;
		}
		
		if(!empty($obj->img_banner)){
			$output->img_banner = $obj->img_banner;
		}
		
		if(!empty($obj->date_registration)){
			$output->date_registration = $obj->date_registration;
		}
		
		if(!empty($obj->adresse)){
			$output->adresse = $obj->adresse;
		}
		
		if(!empty($obj->user_name)){
			$output->user_name = $obj->user_name;
		}
		
		if(!empty($obj->user_firstname)){
			$output->user_firstname = $obj->user_firstname;
		}
		
		if(!empty($obj->user_mail)){
			$output->user_mail = $obj->user_mail;
		}
		
		if(!empty($obj->user_password)){
			$output->user_password = $obj->user_password;
		}
		
		if(!empty($obj->cart)){
			$output->cart = $obj->cart;
		}

		return($output);
		
	}
	
	public function connectUser($mail,$password){
		$get = PDOModel::getSQL("user", "*", "`user_mail` = '". $mail . "' AND `user_password` = '". $password ."'");
		
		if(empty($get)){
			echo "Erreur";
		}else {
			$output = self::convertObjToUser($get);
			if (session_status() == PHP_SESSION_NONE) {
				session_start();
			}
			
			$_SESSION['user']= serialize($output);
			echo('SESSION COMMITED : ' . var_dump($_SESSION['user']));
			header("Refresh:0; url=/athome/");
		}
	}		

	public function getCurrentUser(){
		return ($_SESSION['user']);
	}		

	public function updateUser($user){
		
		PDOModel::updateSQL('user', $user->id, 
							"`img_present` = '" . $user->img_present . "', " .
							"`img_banner` = '" . $user->img_banner . "', " .
							"`date_registration` = '" . $user->date_registration . "', " .
							"`adresse`" . $user->adresse . "', " .
							"`user_name` = '" . $user->user_name . "', " .
							"`user_firstname` = '" . $user->user_firstname . "', " .
							"`user_mail` = '" . $user->user_mail . "', " .
							"`cart` = '" . $user->cart . "', " .
							"`user_password` = '" . $user->password . "', "
						   );
	}
				

	public function disconnectUser(){
		unset($_SESSION['user']);
		header("Refresh:0; url=/athome/");
	}
	
}
?>