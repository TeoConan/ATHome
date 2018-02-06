<?php

//include_once("../objects/piece.php");

class typeModel
{
	public static $var = 'test de class static';
	
	
	/*public static function newStyle($piece){
		
		PDOModel::insertSQL('piece',
							"`prix`, 
							`dimensions`, 
							`img_present`, 
							`img_slide`, 
							`ref`,
							`id`, 
							`label`, 
							`brand`, 
							`stock`, 
							`services`, 
							`id_piece_type`, 
							`id_piece_style`"
							,
							$piece->price . ", '" . 
							serialize($piece->dimensions) . "', '" . 
							$piece->img_present . "', '" . 
							serialize($piece->img_slide) . "', '" .
							$piece->ref . "', 
							NULL, '" . 
							$piece->label . "', '" .
							$piece->brand . "', " .
							$piece->stock . ", '" .
							serialize($piece->services) . "', 
							NULL, 
							NULL
							);");
	}*/
	
	
	//Recuperer tous les meubles
	public static function getAllTypes($where = false){
		$all = PDOModel::getAllSQL('piece_type', '*', $where);
		$output = array();

		foreach($all as $element){
			array_push($output, self::convertObjToType($element));
		}
		
		return($output);
	}
	
	//Convertir un objet strClass en Piece
	private function convertObjToType($obj){
		$output = new Type();
		
		if(!empty($obj->id)){
			$output->id = $obj->id;
		}
		
		if(!empty($obj->img_presents)){
			$output->img_present = $obj->img_presents;
		}
		
		if(!empty($obj->color_overlay)){
			$output->color_overlay = $obj->color_overlay;
		}
		
		if(!empty($obj->label)){
			$output->label = $obj->label;
		}
		
		return($output);
		
	}
	
	//Recupere un meuble grace a son id et retourne un objet
	public static function getType($id){
		$output = PDOModel::getSQL("piece_style", "*", "`id` = " . $id);
		return(self::convertObjToPiece($output));
	}

}

?>