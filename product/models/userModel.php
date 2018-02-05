<?php

class userModel {
	
	public function newUser($user){
		
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