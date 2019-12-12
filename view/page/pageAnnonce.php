

<?php 
 

$result = mysqli_query($conn, "SELECT * FROM `annonces`");
$arrayRecup = array();
$arraySignal = array();
while ($row = mysqli_fetch_assoc($result)){
	if($row["recuperer"] == 1){
		array_push($arrayRecup, $row);
	}else{
		array_push($arraySignal, $row);	
	}
}


function affichetab($array,$filtre,$recup){
	$tab = trieUrgent($array);
	$urgent = $tab[0];
	$pasUrgent = $tab[1];
	$urgent = trieFiltre($urgent, $filtre);
	$pasUrgent = trieFiltre($pasUrgent, $filtre);
	affiche($urgent,$recup);
	affiche($pasUrgent,$recup);
}

function trieUrgent($array){
	$fini = false;
	$i = -1;
	$urgent = array();
	$pasUrgent = array();
	while (!$fini) {
		$i ++;
		if($array[$i]["urgent"]==1){
			array_push($urgent, $array[$i]);
		}
		else{
			array_push($pasUrgent, $array[$i]);
		}
		if(count($urgent) + count($pasUrgent) == count($array)){
			$fini = true;
		}
	}
	return [$urgent, $pasUrgent];
}

function trieFiltre($array, $filtre){
	$liste = array();
	if ($filtre == "chien" or $filtre == "chat" or $filtre == "autre"){
		$typeFiltre = "animal";
	}
	else{
		$typeFiltre = $filtre;
	}
	for ($i = 0; $i < count($array); $i++){
		if ($typeFiltre == "animal"){
			if ($array[$i]["type"] == $filtre){
				array_push($liste, $array[$i]);
			}
		}
	}
	return $liste;
}

function affiche($array,$recup){
	for ($i=0; $i < count($array) ; $i++) {
			echo "<tr>";
			echo "<td>".$array[$i]["date"]."</td>";
			echo "<td>".$array[$i]["place"]."</td>";
			echo "<td>".$array[$i]["type"]."</td>";
			echo "<td>".$array[$i]["body"]."</td>";
			echo "<td>".$array[$i]["photo"]."</td>";
			if(!$recup){
				echo '<td><form method="post" action="verifannonce.php">';
				echo "<input type='button' name='recup' value='Récupérer'>";
				echo "</form></td>";
			}else{
				echo '<td><form method="post" action="verifannonce.php">';
				echo "<input type='button' name='recup' value='Contacter'>";
				echo "</form></td>";
			}
			echo "</tr>";
	}
}

	echo "<table>";
	echo "<th colspan = 5>Liste des animaux qui ont déja pus être récupérer par un membre mais qui ne peuvent pas être garder</th>";
	affichetab($arraySignal,"chat",false);
	echo "</table>";

	echo "<table>";
	echo "<th colspan = 5>Liste des animaux qui ont été signaler en exterieur et qui ont besoin d'un nouveau foyer</th>";
	affichetab($arrayRecup,"chat",true);
	echo "</table>";
	
    echo "Envoyer un mail";
    echo '<form action="control/formulaire/envoiMail.php" method="post">';
       // idMembreTo et idMembreFrom
    echo '<p><input type="submit" value="Contacter"></p>';
    echo '</form>';


?>