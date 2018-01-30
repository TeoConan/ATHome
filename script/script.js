console.log('Script script/script.js');

/* Alex */



/* Teo */


//Fonctions de la page product.php
function Slider(elem, imgs, pag){
	this.obj = elem;
	this.gallery = imgs;
	this.size = this.gallery.length;
	this.current = 1;
	this.overlay = $(this.obj).find('.overlay');
	this.pagination = pag;
	this.dots = $(this.pagination).find('.dot');
	var obj = this;

	this.next = function(){
		this.current++;
		console.log('Current = ' + this.current);
		console.log('size = ' + this.size);
		console.log('Current > size ? : ' + (this.current > this.size))
		if (this.current > this.size){
			this.current = 1;
		}
		
		
		
		this.moveTo(this.current);
	}
	
	this.previous = function(){
		this.current--;
		if (this.current == 0){
			this.current = this.size;
		}
		this.moveTo(this.current);
	}
	
	this.moveTo = function(n){
		this.overlay.css('background-color', 'rgba(241,241,241,1)');
		
		setTimeout(function(){
			/*console.log('Move ' + slider + ' slider to ' + n);
			console.log(slider.gallery);
			console.log('Image :  ' + slider.gallery[n-1]);
			console.log('Size : ' + slider.size);*/
			obj.current = n;
			obj.slideTo(slider.gallery[n-1]);
			obj.setDot(n);
			obj.overlay.css('background-color', 'rgba(241,241,241,0)');
		}, 333);
		
		
	}
	
	this.slideTo = function(img){
		this.obj.css('background-image', 'url(' + img +')');
	}
	
	this.setDot = function(n){
		$(pag).find('.dot').removeClass('selected');
		$(pag).find('.dot:nth-child(' + n +')').addClass('selected');
	}
	
	
	for(var i = 0; i < this.dots.length; i++){
		
		this.dots[i].addEventListener("click", function(event){
			obj.moveTo($(event.target).index()+1);
		}, false);
		
		/*
		$(this.dots[i]).click(function() {
			this.moveTo(i);
		});*/
	}
}

try{
	
	var imgslider = new Array();
	imgslider[0] = "res/img/architecture-2558994_1920.jpg";
	imgslider[1] = "res/img/element_2.jpg";
	imgslider[2] = "res/img/element_1.jpg";
	imgslider[3] = "res/img/furniture-2603068_1920.jpg";
	
	var slider = $('.page-product > .slider');
	var overlay = $('.page-product > .slider > .overlay');
	var imgp = $('.page-product .slider .overlay > img.previous');
	var imgn = $('.page-product .slider .overlay > img.next');
	var pagin = $('.page-product .slider .pagination');
	
	slider = new Slider(slider, imgslider, pagin);
	slider.moveTo(4);
	
	
	$(imgn).click(function() {
	  slider.next();
	});
	
	$(imgp).click(function() {
	  slider.previous();
	});
	
	
} catch(e){console.error(e);}

function commandSlider(){}

function moveSlider(slider, n, imgs){
	console.log('Move slider to ' + n);
	console.log('Slider :' + slider);
	console.log('Image :  ' + imgs[n]);
	console.log('Size : ' + imgs.length);
	setSliderImg(slider, imgs[n]);
	setDotSelected(n);
}

function setSliderImg(slider, img){
	
}

function setDotSelected(n){
	$('.page-product .slider .pagination > .dot').removeClass('selected');
	$('.page-product .slider .pagination > .dot:nth-child(' + n +')').addClass('selected');
}




//Fonctions de la page checkout.php
try{
	var card_is_validate = false;
	var buttonaddcard = document.getElementById('add_card');

	if (buttonaddcard != null){
		buttonaddcard.addEventListener("click", checkout_checkCard, false);
	}
} catch(e){console.error(e);}

function checkout_checkCard(){
	if (!card_is_validate){
		console.log('Function : checkCard class ' + this.toString);
		var owner = document.getElementById('card_owner').value;
		var datexpire = document.getElementById('card_expire').value;
		var numbercard = document.getElementById('card_number').value;
		var cardcvv = document.getElementById('card_cvv').value;


		console.log('Owner = ' + owner);
		console.log('datexpire = ' + datexpire);
		console.log('numbercard = ' + numbercard);
		console.log('cardcvv = ' + cardcvv);

		var error = false;
		/* Check owner */
		if(owner == null){error = true;}

		/* Check date expire */
		if(datexpire == null){error = true;}

		/* Check number */
		if (numbercard == null || numbercard.length != 16){
			error = true;
		}

		/* Check CVV */
		if (cardcvv == null || cardcvv.length != 3){
			error = true;
		}

		var text_error = document.getElementById('card_error');
		var img_validate = document.getElementById('card_validate');

		if (error){
			text_error.style.display = 'block';
			img_validate.style.display = 'none';
		} else {
			text_error.style.display = 'none';
			img_validate.style.display = 'block';
		}

		/*var owner, numbercard, date, cvv;

		owner = $('.pay-form #card_owner').val;
		console.log('Owner = ' + owner);*/
	}	
}
