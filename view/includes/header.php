<?php
session_start();
$_SESSION['cookie_user'] = "user";
setcookie($_SESSION['cookie_user'], "", time() + (86400 * 30), "/"); //on creer un cookie pour savoir si l'utilisateur est connecté
$_SESSION['page'] = "connect";
?>

	<!DOCTYPE html> 
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Hipilly</title>
			<link rel="stylesheet" type="text/css" href="view/styles/style.css"/>
		</head>
	<body>
		<header>
			<img src="view/images/logo.png" height="30px" width="30px">
			<h1>HIPILLY</h1>
			<h2>They'll live hipilly ever after</h2>
			include le formulaire de connection
		<div class="connexion">
			<?php
            if(!isset($_COOKIE[$_SESSION['cookie_user']])) {
                echo '<form action="./control/js/verifCompte.php" method="post">';
                echo '<p>Votre nom : <input type="text" name="nom" required="required"/></p>';
                echo '<p>Votre mdp : <input type="text" name="mdp" required="required"/></p>';
                echo '<p><input type="submit" value="Connexion"></p>';
                echo '</form>';
                
                echo '<a href="./view/page/nouvelUtilisateur.php">Pas de compte ? Creez en un</a>';
            } else {
                echo "Bonjour " . $_COOKIE[$_SESSION['cookie_user']];
                echo "<br/>";
                echo '<button onclick="deconnexion()">Deconnexion</button>';
            }
       		?>       
		</div>
		<section>
			<a href='index.php?page=home'><article id='a1'>Accueil</article></a>
			<a href='index.php?page=recuperer'><article id='a3'>Récupérer</article></a>
			<a href='index.php?page=signaler'><article id='a2'>Signaler</article></a>
			<a href='index.php?page=pageAnnonce'><article id='a3'>Annonce</article></a>
			<a href='index.php?page=contacts'><article id='a4'>Contacts</article></a>
		</section>

	</header>
	<body>
		<?php include "./control/js/deconnexion.js"; //use deconnection() pour se deconnecter
		include "./control/js/coordonnees";// use getCoord() pour connaitre les coordonnées de l'utilisateur
		//use coordsByAdress(adresseHtml) pour connaitre les coordonnées de l'adresse
		// use getAdresse() pour connaitre l'adresse
		?> 