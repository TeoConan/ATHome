console.log('Script script/script.js');

/* Alex */



/* Teo */



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
