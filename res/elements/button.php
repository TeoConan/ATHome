<?php
// Nous créons une classe « Personnage ».
class Button
{
	const COLOR_DEFAULT = '#00695c';
	const COLOR_BLACK = '#212121';
	const COLOR_RED = '#c62828';
	
	const BUTTON_TYPE_DEFAULT = 68456903;
	const BUTTON_TYPE_CUSTOM = 30369812;
	const BUTTON_TYPE_WHITE = 95206480;
	
	public $class;			//Classes HTML
	private $id;			//ID HTML
	public $back_color;		//Couleur du bouton
	public $text;			//Texte du bouton
	public $link;			//Lien href
	public $click;			//onClick Javascript
	private $_attr;			//Attributs HTML

	public $addstyle;

	//							Texte du bouton, lien
	public function __construct($text, $link='#') {
		$this->text = $text;
		$this->link = $link;
		$this->class = "button";
	}
	
	/* Functions */
	
	//Obtenir le HTML
	public function getOutput(){
		$output = "";
		$this->_attr = "";
		
		if (isset($this->link) && !empty($this->link)){
			$this->_attr .= 'href="' . $this->link . '" ';
		}/* else {$this->_attr .= 'href="#" ';}*/
		
		if (isset($this->_id) && !empty($this->_id)){
			$this->_attr .= 'id="' . $this->_id . '" ';
		}
		
		if (isset($this->click) && !empty($this->click)){
			$this->_attr .= 'onClick="' . $this->click . '" ';
		}
		
		$this->_attr .= 'class="' . $this->class . '" ';
		
		if (isset($this->addstyle) && !empty($this->addstyle)){
			$this->_attr .= 'style="' . $this->addstyle . '" ';
		}
		
		
		$output .= '
			<a ' . $this->_attr . '>
				<span>' . $this->text . '</span>
			</a>
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
	
		/* Get */

		public function getID(){
			return($this->_id);
		}
	
		public function setID($id){
			$this->_id = $id;
		}	/* Doc */
	
	private function test(){
		//Bouton par default
		$but1 = new Button('Yop', 'yop.fr');
		$but1->setID('but1');
		echo($but1->getOutput());
	}
}
?>