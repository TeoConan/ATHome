<?php

//include_once("../objects/piece.php");

class pieceModel
{
	public static $var = 'test de class static';
	
	
	public static function newPiece($piece){
		
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
	}
	
	
	//Recuperer tous les meubles
	public static function getAllPieces($where = false){
		$all = PDOModel::getAllSQL('piece', '*', $where);
		$output = array();

		foreach($all as $element){
			array_push($output, self::convertObjToPiece($element));
		}
		
		return($output);
	}
	
	//Convertir un objet strClass en Piece
	private function convertObjToPiece($obj){
		$output = new Piece();
		
		if(!empty($obj->id)){
			$output->id = $obj->id;
		}
		
		if(!empty($obj->img_present)){
			$output->img_present = $obj->img_present;
		}
		
		if(!empty($obj->img_slide)){
			$output->img_slide = $obj->img_slide;
		}
		
		if(!empty($obj->ref)){
			$output->ref = $obj->ref;
		}
		
		if(!empty($obj->label)){
			$output->label = $obj->label;
		}
		
		if(!empty($obj->brand)){
			$output->brand = $obj->brand;
		}
		
		if(!empty($obj->stock)){
			$output->stock = $obj->stock;
		}
		
		if(!empty($obj->services)){
			$output->services = $obj->services;
		}
		
		if(!empty($obj->price)){
			$output->price = $obj->price;
		}
		
		if(!empty($obj->dimensions)){
			$output->dimensions = $obj->dimensions;
		}
		
		if(!empty($obj->style)){
			$output->style = $obj->style;
		}
		
		if(!empty($obj->type)){
			$output->type = $obj->type;
		}
		
		return($output);
		
	}
	
	//Recupere un meuble grace a son id et retourne un objet
	public static function getPiece($id){
		$output = PDOModel::getSQL("piece", "*", "`id` = " . $id);
		var_dump($output);
	}
	
	public static function updatePiece($piece){
		
		PDOModel::updateSQL('piece', $piece->id, 
							"`prix` = '" . $piece->price . "', " .
							"`img_present` = '" . $piece->img_present . "', " .
							"`img_slide` = '" . serialize($piece->img_slide) . "', " .
							"`ref` = '" . $piece->ref . "', " .
							"`label` = '" . $piece->label . "', " .
							"`brand` = '" . $piece->brand . "', " .
							"`stock` = '" . $piece->stock . "', " .
							"`services` = '" . serialize($piece->services) . "', " .
							"`dimensions` = '" . serialize($piece->dimensions) . "', " .
							"`id_piece_type` = '" . $piece->type . "', " .
							"`id_piece_style` = '" . $piece->style . "' "
						   );
		
	}
	
	
	//Delete
	public static function insertSQL($table, $cln, $value) {
			$query = 'INSERT INTO `' . $table . '` (' . $cln . ') VALUE (' . $value . ')';
			return (self::exeSQL($query));
	}
}

?>