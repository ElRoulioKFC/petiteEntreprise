
<?php
include_once('../../model/db.php');


$adresse =  mysqli_real_escape_string($conn,$_POST["adresse"]);
$animal =  mysqli_real_escape_string($conn,$_POST["animal"]);
$nomPhoto =  mysqli_real_escape_string($conn,$_POST["nomPhoto"]);
$description =  mysqli_real_escape_string($conn,$_POST["description"]); 

$result = mysqli_query($conn, "SELECT * FROM `annonces`");

$result = mysqli_query($conn, 
	"INSERT INTO `annonces` (`id`, `date`, `place`, `type`, `body`, `photo`, `idmembre`) VALUES (NULL,CURRENT_TIMESTAMP, '$adresse', '$animal', '$description', '$nomPhoto', NULL);");
	
var_dump(mysqli_error($conn));

header("Location:http://10.103.1.202/~GEYER/");
?>