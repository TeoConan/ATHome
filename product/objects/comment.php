<?php

class Comment {
	
	public $id;			// Id unique du commentaire
	public $post_date;	// Date en format texte de publication du commentaire
	public $score;		// Nombre d'étoiles
	public $post_text;	// Commentaire
	public $user;		// Créateur du commentaire
	public $id_piece;	// Id du meuble dans lequel est écrit le commentaire

}
?>