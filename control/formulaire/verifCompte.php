<?php
    $sql = "SELECT * FROM membre";
	$results = mysqli_query($conn,$sql);

<<<<<<< Updated upstream
    include_once('../../model/db.php');
    setcookie($_SESSION['cookie_user'], $_POST['nom']);
    header('Location: ./index.php');
=======
	// Récupération des résultats

	while($row = mysqli_fetch_assoc($results)) {
		$nom = $row["name"];
		$mdp = $row["motDePasse"];

		if($nom == $_POST["nom"] and $mdp == $_POST["mdp"]){
	    	setcookie($_SESSION['cookie_user'], $_POST['nom']);
    		header('Location: ./index.php');
		}
>>>>>>> Stashed changes
	}
?>