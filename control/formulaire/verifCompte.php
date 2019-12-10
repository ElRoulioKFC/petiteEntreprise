<?php
    $sql = "SELECT * FROM membre";
	$results = mysqli_query($conn,$sql);

	// Récupération des résultats

	while($row = mysqli_fetch_assoc($results)) {
		$nom = $row["name"];
		$mdp = $row["motDePasse"];

		if($nom == $_POST["nom"] and $mdp == $_POST["mdp"]){
	    	setcookie($_SESSION['cookie_user'], $_POST['nom']);
    		header('Location: ./index.php');
		}
	}
?>
