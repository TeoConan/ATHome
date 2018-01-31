// JavaScript Document
console.log ('script');

function showPopup(){
	$("#pop-up").before('<div id="overlay"></div>');
	
	$("#overlay").css('opacity', 0).fadeTo(300, 0.5, function () { $("#pop-up").fadeIn(500); });
}

function Overlay() {
	// on fait disparaître le gris de fond rapidement
     $("#overlay").fadeOut('fast', function () { $(this).remove() });
 
     // on fait disparaître le popup à la même vitesse
     $("#pop-up").fadeOut('fast', function () { $(this).hide() });
 
}

function connect(){
	var mail = document.getElementById('email');
	var password = document.getElementById('password');
	var text = document.getElementById('text_connect');
	
	if( mail.value=="" || password.value == ""){
		text.style.opacity=1;
	} else {
		console.log('Connect to account');
		window.location.href = "http://localhost/athome/account.php";
	}
	
}
