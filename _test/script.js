// JavaScript Document




var rater = new Rater($('#rate-stars'));

function Rater(elem){
	this.html = elem;
	this.me = this;
	this.stars = $(this.html).find('> .star');
	this.rate = 0;	//Entre 0 & 10
	
	this.star_half = "../res/icons/ic_star_half_black_24px.svg";
	this.star_border = "../res/icons/ic_star_border_black_24px.svg";
	this.star_full = "../res/icons/ic_star_black_24px.svg";
	
	//Functions
	
	this.initStars(){
		
	}
	
	this.setStar = function(n, rate){
		var imgrate = "";
		
		switch(rate){
			case 0 :
				imgrate = this.star_border;
				break;
			
			case 0.5 :
				imgrate = this.star_half;
				break;
				
			case 1 :
				imgrate = this.star_full;
				break;
		}
		
		$(this.html).find('> .star:nth-child(' + n + ')').attr('src', imgrate);
	}
	
	//Exe
	this.html.css('border', '1px solid green');
	this.stars.css('border', '1px solid red');
	
	this.setStar(2, 0);
	
	/*for(var i = 0; i < this.dots.length; i++){
		
		this.dots[i].addEventListener("click", function(event){
			me.moveTo($(event.target).index()+1);
		}, false);
	}*/
}