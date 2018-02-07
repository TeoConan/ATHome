console.log('Script script/script.js');

/* Alex */

// Fonction de la page product.php

// Onglets
/*
function change_onglet(name)
=======
/*function change_onglet(name)
>>>>>>> teo
                {
                        document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
                        document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
                        document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
                        document.getElementById('contenu_onglet_'+name).style.display = 'block';
                        anc_onglet = name;
                }
                }

var anc_onglet = 'quoi';
<<<<<<< HEAD
change_onglet(anc_onglet);
*/

// Inscription

function register(){
	var reg_email = document.getElementById('reg-email').value ; 
	var reg_name = document.getElementById('reg-name').value;
	var reg_password= document.getElementById('reg-password').value;
	var reg_password_conf= document.getElementById('reg-password-conf').value;
	
	if(reg_email != null &&
	   reg_name != null && 
	   (reg_password != null && reg_password_conf != null && reg_password == reg_password_conf)){
		console.log ("Envoi de la requête");
		
		var query = ('inscription.php?regemail=' + reg_email + '&regname=' + reg_name + '&regpassword=' + reg_password + '&regpasswordconf=' + reg_password_conf);
		
		//instance de l'objet
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function() {
			if (this.readyState == 4 && this.status == 200) {
				
				if (this.responseText == "connected"){
					window.location.replace("account.php");
				}
				console.log("ShowMessage response = ");
				console.log(this.responseText);
			}
		};

		xhttp.open("GET",query , true);
		xhttp.send();
		
	}
}

function sendQuery(query){
    console.log('Function sendQuery');
    console.log("query : " + query);
    
    //instance de l'objet
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("ShowMessage response = ");
            console.log(this.responseText);
        }
    };
    
    xhttp.open("GET",query , true);
    xhttp.send();
}



/* Teo */


//Fonctions de la page product.php
function Slider(elem, imgs, pag){
	this.obj = elem;
	this.gallery = imgs;
	this.size = this.gallery.length;
	this.current = 1;
	this.overlay = $(this.obj).find('> .overlay');
	this.pagination = pag;
	this.dots = $(this.pagination).find('.dot');
	var me = this;
	this.popup = null;
	this.buttonzoom = null;

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
			me.current = n;
			me.slideTo(me.gallery[n-1]);
			me.setDot(n);
			me.overlay.css('background-color', 'rgba(241,241,241,0)');
		}, 333);
		
		
	}
	
	/* Exe */
	
	this.slideTo = function(img){
		this.obj.css('background-image', 'url(' + img +')');
	}
	
	this.setDot = function(n){
		$(pag).find('.dot').removeClass('selected');
		$(pag).find('.dot:nth-child(' + n +')').addClass('selected');
	}
	
	
	for(var i = 0; i < this.dots.length; i++){
		
		this.dots[i].addEventListener("click", function(event){
			me.moveTo($(event.target).index()+1);
		}, false);
		
		/*
		$(this.dots[i]).click(function() {
			this.moveTo(i);
		});*/
	}
	
	this.moveTo(1);
	
	/* Popup */
	
	this.initPopup = function(popup, button){
		this.popup = popup;
		this.buttonzoom = button;
		
		$(this.buttonzoom).click(function() {
			me.showFullScreen();
		});
		
		
		
		$(this.popup).find('> .overlay').click(function() {
			console.log('Click overlay');
			me.hidePopup();
		});
	}
	
	this.hidePopup = function(){
		if (me.popup != null && me.buttonzoom != null){
			$(me.popup).css('opacity', '0');
			setTimeout(function(){
				$(me.popup).css('display', 'none');
			}, 250);
			
		}
	}
	
	this.showFullScreen = function(){
		if (me.popup != null && me.buttonzoom != null){
			$(me.popup).find('img').attr('src', me.gallery[me.current-1]);
			$(me.popup).css('display', 'flex');
			
			setTimeout(function(){
				$(me.popup).css('opacity', '1');	
			}, 50);
		}
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
	var imgz = $('.page-product .slider .overlay > img.zoom');
	var pagin = $('.page-product .slider .pagination');
	var popup = $('.page-product .slider > .popup');
	
	slider = new Slider(slider, imgslider, pagin);
	slider.initPopup(popup, imgz);
	
	$(imgn).click(function() {
	  slider.next();
	});
	
	$(imgp).click(function() {
	  slider.previous();
	});
	
	
} catch(e){console.error(e);}



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
