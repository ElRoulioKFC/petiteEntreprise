<?php
        $nom = $_POST['nom'];
        $association = $_POST['association'];
        $site = $_POST['site'];
        $mail = $_POST['mail'];
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];
        $mdp = $_POST['mdp'];

        echo $association;

        
        /*if($association == "oui" and isset($site) and empty($site)){//on verifie que si c'est une assoc, il a un site web
            header('Location: newUser.php');
        }*/

        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) { //verifie l'email
                header('Location: connect_disconnect.php');
        }
        else{header('Location: newUser.php');}

        if(preg_match('`[0-9]{10}`', $telephone)) { //verifie le numero de telephone
                header('Location: connect_disconnect.php');
        }
        else{header('Location: newUser.php');}
 
 ?>