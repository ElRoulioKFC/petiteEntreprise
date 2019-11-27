<<<<<<< Updated upstream:pages/verifsignal.php
verifsignal.php
=======
<?php 
session_start();
$errors = [];

if (!isset($_POST["description"]) ||
    $_POST["description"] == "")
    $errors[] = "description";
	
	


if (count($errors) > 0) {
	$_SESSION["errors"] = $errors;
	$_SESSION["old"] = $_POST;
	header("Location: index.php");
} else {
	header("Location: welcome.php");
}




?>
>>>>>>> Stashed changes:control/formulaire/verifsignal.php
