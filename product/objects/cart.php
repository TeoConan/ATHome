<?php

class Cart {
	
	public $id;
	public $items;
	public $total_price;
	
	
	// Ajouter un cartRelation
	public function addItem($cartRelation){
		$items = array();
		array_push($items,$cartRelation);
	}
	
	// Supprimer un cartRelation
	public function removeItem($cartRelation){
		for ($i = 0; $i <sizeof($items);$i++){
			if($items[$i]->id == $cartRelation->id){
				unset($item[$i]);
			}
		}
	}
	
	// Additionner le prix des items
	public function makePrice(){
		
		$total = 0;
		foreach ($items as $element){
			$total += $element->piece->price;	
		}
	}
	
	// Retourne l'item demandé
	public function getItem($id){
		$output;
		for ($i = 0; $i <sizeof($items);$i++){
			if($items[$i]->id == $cartRelation->id){
				$output = $item[$i]->piece;
			}
		}
		return $output;
	}
}
?>