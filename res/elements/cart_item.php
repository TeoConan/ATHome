<?php

class CartItem
{
	
	//Content
	private $_id;			//ID HTML
	private $_relation;
	private $_piece;
	
	private $_attr;
	public $image;			//Image preview
	public $ref;
	public $title;
	public $price;
	public $brand;
	public $services;
	public $descr;
	
	//Service
	public $livraison;
	public $donation;
	public $made;
	public $eco;
	
	
	//						Texte à afficher, image de background, type : default, large ou custom
	public function __construct($cartrelation) {
		
	}
	
	//Obtenir le HTML une fois les paramètres rentrés
	public function getOutput(){
		$output = "";
		
		
		if (isset($this->_id) && !empty($this->_id)){
			$this->_attr = 'id="' . $this->_id . '" ';
		}
		
		$output .= '
		
		<div class="cart-item" ' . $this->_attr . '>
					<div class="inner">
						
						<div class="price">
							<h1>' . $this->price . '€</h1>
						</div>
						
						<div class="separator"></div>						
						<div class="preview">
						</div>
						
						<div class="text">
							<h2>' . $this->price . '</h2>
							<p>' . $this->descr . '</p>
						</div>
		';
		
		$output .= '<div class="services">';
		
		if ($this->donation){
			$output .= '
			<div class="item">
				<img src="res/icons/ic_monetization_on_white_24px.svg"/>
			</div>
			';
		}
		
		if ($this->eco){
			$output .= '
			<div class="item">
				<img src="res/icons/ic_local_florist_white_24px.svg"/>
			</div>
			';
		}
		
		if ($this->livraison){
			$output .= '
			<div class="item">
				<img src="res/icons/ic_directions_car_white_24px.svg"/>
			</div>
			';
		}
		
		if ($this->made){
			$output .= '
			<div class="item">
				<img src="res/icons/ic_pin_drop_white_24px.svg"/>
			</div>
			';
		}
		
		
		$output .= '
						</div>
						
						<div class="amount">
							<p>Quantité : 2</p>
						</div>
						
						<div class="close">
							<img src="res/icons/ic_clear_black_24px.svg"/>
						</div>
					</div>
				</div>
		
		';
		return($output);
	}
	
	/* Unite */
	private function px($px){
		return($px . 'px');
	}
	
	private function rem($rem){
		return($rem . 'rem');
	}
	
	//Obtenir les info sur l'objet (debuging)
	public function printInfo(){
		echo('
		<ul>
		<li>image = ' . $this->image . '</li>
		<li>title = ' . $this->title . '</li>
		<li>sub = ' . $this->subtitle . '</li>
		<li>type = ' . $this->type . '</li>
		<li>class = ' . $this->class . '</li>
		<li>link = ' . $this->link . '</li>
		<li>addstyle = ' . $this->addstyle . '</li>
		<li>Attr = ' . $this->_attr . '</li>
		<li>Click = ' . $this->click . '</li>
		</ul>
		
		
		');
	}
	
	/* Get & Set */
	
	public function getID(){return $this->_id;}
	public function setID($id){$this->_id = $id;}
	
	/* Doc */
	
	private function test(){
		
	}
}
?>