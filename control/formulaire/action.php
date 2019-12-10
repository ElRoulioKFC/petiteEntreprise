<?php
	if($_SESSION['page'] == "connect"){ //pour la connexion

    	if(isset($_POST['nom'], $_POST['mdp']) and !empty($_POST['nom'] and $_POST['mdp'])){ 
    	   //echo("<script>alert('acceuil')</script>");
    	    setcookie($_SESSION['cookie_user'], $_POST['nom']);
    	}
    	 header('Location: connect_disconnect.php');
	}
	
 	if($_SESSION['page'] == "creerCompte"){ //pour creer un compte
     	if(isset($_POST['nom'], $_POST['mail'], $_POST['telephone'], $_POST['adresse'], $_POST['mdp'])
     	and !empty($_POST['nom'] and $_POST['mail'] and $_POST['telephone'] and $_POST['adresse'] and $_POST['mdp'])){ 
            if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) { //verifie l'email
                header('Location: connect_disconnect.php');
            }
            else{header('Location: newUser.php');}

            if(preg_match('`[0-9]{10}`', $_POST['telephone'])) { //verifie le numero de telephone
                header('Location: connect_disconnect.php');
            }
            else{header('Location: newUser.php');}
     	}
     	else{header('Location: newUser.php');}
 	}
 ?>