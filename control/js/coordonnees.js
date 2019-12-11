	

////////////////////////////////// recuperer coordonnees
lat = 0;
long = 0;

function getCoord(){ //retourne les coordonnéess
	knowCoords();
	return lat, long;
}

function getCoordsByAdress(adresseHtml){ //retourne les coordonnéess
	knowCoords();
	coordsByAdress(adresseHtml);
	return lat, long;
}

function knowCoords() { //appelle la fonction pour connaitre les coordonnées
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(coords, showError);
  } else { 
    alert("Geolocation is not supported by this browser.");
  }
}

function coords(position) {//changes les variables lat et longs
	lat = position.coords.latitude;
	long = position.coords.longitude;
}

function coordsByAdress(adresseHtml) {// retourne les coordonnées en fonction de l'adresse
	adresse = adresseHtml;
    req = new XMLHttpRequest();
	adresse = adresse.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ""); //enleve les accents caracteres speciaux
	req.open('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address='+adresse+'&key=AIzaSyA5cpN4wc17fVbAuFV5yC04IGzCqXTvqZg');//requete a google pour avoir le fichier json
	
	req.addEventListener('readystatechange', function() {  
		if (req.readyState === XMLHttpRequest.DONE && req.status === 200) { // Si le fichier est chargé sans erreur
		    var obj = JSON.parse(req.responseText);
		    lat = obj.results[0].geometry.location.lat;
		    long = obj.results[0].geometry.location.lng;
		    }
		});

	req.send();
	y.innerHTML = req.responseText;}

////////////////////////////// recuperer adresse

adress = "";

function getAdresse() { //retourne l'adresse
	knowAdresse();
	<?php echo $_SESSION["adresseAuto"]; ?> = adress;
}

function knowAdresse() { //appelle la fonction pour connaitre l'adresse
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(coords, showError);
  } else { 
    alert("Geolocation is not supported by this browser.");
  }
}

function getAdress(position) {

	lat = position.coords.latitude;
	long = position.coords.longitude;
	req = new XMLHttpRequest();
	req.open('GET', 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+long+'&key=AIzaSyA5cpN4wc17fVbAuFV5yC04IGzCqXTvqZg');

	req.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone
		if (req.readyState === XMLHttpRequest.DONE && req.status === 200) { // Si le fichier est chargé sans erreur
	     	obj = JSON.parse(req.responseText);
	      	adress = obj.results[0].formatted_address;
		}
	});
	req.send();
}

/////////////////////////////// erreur

function showError(error) { //affiche les potentielles erreurs
	switch(error.code) {
	    case error.PERMISSION_DENIED:
	      x.innerHTML = "User denied the request for Geolocation."
	      break;
	    case error.POSITION_UNAVAILABLE:
	      x.innerHTML = "Location information is unavailable."
	      break;
	    case error.TIMEOUT:
	      x.innerHTML = "The request to get user location timed out."
	      break;
	    case error.UNKNOWN_ERROR:
	      x.innerHTML = "An unknown error occurred."
	      break;
	  }
}


