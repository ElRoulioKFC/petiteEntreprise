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
                echo '<form action="control/formulaire/verifCompte.php" method="post">';
                echo '<p>Votre nom : <input type="text" name="nom" required="required"/></p>';
                echo '<p>Votre mdp : <input type="text" name="mdp" required="required"/></p>';
                echo '<p><input type="submit" value="Connexion"></p>';
                echo '</form>';
                
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
			<a href='index.php?page=nouvelUtilisateur'>Pas de compte ? Creez en un</a>
		</section>


	</header>
