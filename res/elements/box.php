<?php

class Box
{

	//Valeurs constance
	const BOX_TYPE_DEFAULT = 63594128;
	const BOX_TYPE_LARGE = 42968517;
	const BOX_TYPE_CUSTOM = 47896250;
	
	//Content
	private $_id;			//ID HTML
	private $_attr;			//Attributs HTML, éviter de modifier
	public $type;			//Type de box, default, large, custom
	public $class;			//Classes attribuées dans le html
	public $title;			//Texte principal
	public $subtitle;		//Texte secondaire
	public $image;			//Image background
	public $link;			//Lien href
	public $click;			//onClick Javascript
	public $bg_color;		//Background color
	public $addstyle;		//Style css additionnel
	
	//						Texte à afficher, image de background, type : default, large ou custom
	public function __construct($text, $image="", $type=Box::BOX_TYPE_DEFAULT) {
		
		$this->title = $text;
		$this->image = $image;
		$this->type = $type;
		switch($type){
			case Box::BOX_TYPE_DEFAULT :
				$this->class = 'box';
				break;
				
			case Box::BOX_TYPE_LARGE :
				$this->class = 'box large';
				break;
				
			case Box::BOX_TYPE_CUSTOM :
				$this->class = 'box';
				break;
		}
	}
	
	//Obtenir le HTML une fois les paramètres rentrés
	public function getOutput(){
		$output = "";
		$this->_attr = "";
		
		//Suivi
		
		
		//ATTR
		if (isset($this->_id) && !empty($this->_id)){
			$this->_attr .= 'id="' . $this->_id . '" ';
		}
		
		if (isset($this->link) && !empty($this->link)){
			$this->_attr .= 'href="' . $this->link . '" ';
		}
		
		$this->_attr .= 'class="' . $this->class . '" ';
		$this->_attr .= 'style="' . $this->addstyle . ' background-image : url(\'' . $this->image . '\');"';
		
		if (isset($this->click) && !empty($this->click)){
			$this->_attr .= 'onClick="' . $this->click . '" ';
		}
		
		//Si pas de lien, transformer en div
		if (isset($this->link) && !empty($this->link)){
			$output .= '
				<a ' . $this->_attr . '>
			';
		} else {
			$output .= '
				<div ' . $this->_attr . '>
			';
		}
		
		if (isset($this->bg_color) && !empty($this->bg_color)){} else {
			$this->bg_color = 'rgba(0,0,0,0)';
		}
		
		
		$output .= '
			<div class="inner" style="background: ' . $this->bg_color . ';">
				<span class="title">' . $this->title . '</span>
			</div>
		';
		
		if (isset($this->subtitle) && !empty($this->subtitle)){
			$output .= '<span class="sub-title">' . $this->subtitle . '</span>';
		}

		
		//Si pas de lien, transformer en div
		if (isset($this->link) && !empty($this->link)){
			$output .= '
				</a>
			';
		} else {
			$output .= '
				</div>
			';
		}
		
		
		/*$output .= '
		<a href="" class="box large">
    		<div class="inner">
    			<span class="title">Commandes</span>
    		</div>
    		
    		<span class="sub-title">Suivi &amp; Historique</span>
    	</a>
		';*/
		
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
	
	//Couleur et opacité du background
	public function setBackground($rvb){
		$this->bg_color = 'rgba(' . $rvb . ', 0.5)';
	}
	
	/* Doc */
	
	private function test(){
		
		//Instance de l'objet
		$asiat = new Box('Asiatique', "res/img/style_asiatique.jpg");
		//Définir le lien
		$asiat->link = "/product.php?style=asiatique";
		//Défini la couleur du background, l'opacité est de 0.5
		$asiat->setBackground(107, 11, 12);
		//Affichage
		echo($asiat->getOutput());
	}
}
?>