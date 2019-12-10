<?php


        include_once('../../model/db.php');

        $nom =  mysqli_real_escape_string($conn,$_POST['nom']);
        $association =  mysqli_real_escape_string($conn,$_POST['association']);
        $site =  mysqli_real_escape_string($conn,$_POST['site']);
        $mail =  mysqli_real_escape_string($conn,$_POST['mail']);
        $telephone =  mysqli_real_escape_string($conn,$_POST['telephone']);
        $adresse =  mysqli_real_escape_string($conn,$_POST['adresse']);
        $mdp =  mysqli_real_escape_string($conn,$_POST['mdp']);

        
        /*if($association == "oui" and isset($site) and empty($site)){//on verifie que si c'est une assoc, il a un site web
            header('Location: newUser.php');
        }*/


 
       // if(filter_var($mail, FILTER_VALIDATE_EMAIL)) { //verifie l'email
             //   header('Location: http://10.103.1.202/~GEYER/index.php');
        //}
        //else{header('Location: http://10.103.1.202/~GEYER/view/page/nouvelUtilisateur.php');}

        //if(preg_match('`[0-9]{10}`', $telephone)) { //verifie le numero de telephone
              //  header('Location: http://10.103.1.202/~GEYER/index.php');
        //}
        //else{header('Location: http://10.103.1.202/~GEYER/view/page/nouvelUtilisateur.php');}

        $result = mysqli_query($conn, "SELECT * FROM `membre`");

        $result = mysqli_query($conn, 
        "INSERT INTO `membre` (`id`, `name`, `isAsso`, `mail`, `telephone`, `site`, `adresse`, `motDePasse`) 
                        VALUES (NULL, '$nom', $association, '$mail', $telephone,'$site', '$adresse', '$mdp');");
    
        var_dump(mysqli_error($conn));

        header("Location:http://10.103.1.202/~GEYER/");
 ?>