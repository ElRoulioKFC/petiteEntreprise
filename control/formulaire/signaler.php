<?php

if (isset($adresse)) {

	//$adresse= getAdresse();
	//echo $adresse;
	$adresse = $_POST["adresse"];
	$animal =  mysqli_real_escape_string($conn,$_POST["animal"]);
	// mysqli_real_escape_string($conn,$_POST["nomPhoto"]);
	$description =  mysqli_real_escape_string($conn,$_POST["description"]); 

	if ($adresse == "Je préfère prendre mes coordonnées gps."){
	$adresse= getAdress();
	}
	else{$adresse =  mysqli_real_escape_string($conn,$_POST["adresse"]);}

	$result = mysqli_query($conn, "SELECT * FROM `annonces`");


		// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
		if (isset($_FILES['photo']))
		{
	        // Testons si le fichier n'est pas trop gros
        if ($_FILES['photo']['size'] <= 2000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['photo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        $name = $infosfichier['filename'];
        $file = '' .time(). '' .$name. '.' .$extension_upload;

                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['photo']['tmp_name'], 'model/imageBase/' . $file);
                        echo "<font color='green'>L'envoi de votre image bien été effectué !</font><br />";
                        echo'<center><a href="model/imageBase/'.$file.' "/>Voir l\'image</a></center>';
                }else{
                    
                        echo "<font color='red'>L'extension du fichier n'est pas autorisée. <br /></font>";
                        echo "<font color='red'>(Seuls les fichiers jpg, jpeg, gif, png sont acceptés.)</font> ";
                    
                     }
        }else
        {
            echo "<font color='red'>Le fichier est trop volumineux.</font> <br />";
            echo "<font color='red'>(Poids limité à 4Mo)</font>";
        }
}else
{
    echo "<font color='red'>Veuillez selectionner un fichier.</font>";    
}


	$result = mysqli_query($conn, 
		"INSERT INTO `annonces` (`id`, `date`, `place`, `type`, `body`, `photo`, `idmembre`) VALUES (NULL,CURRENT_TIMESTAMP, '$adresse', '$animal', '$description', '$file', NULL);");
		
	var_dump(mysqli_error($conn));
	}
