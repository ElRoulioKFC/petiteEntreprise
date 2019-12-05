<?php 
session_start();
$errors = [];
 
if (!isset($_POST["description"]) ||
    $_POST["description"] == ""){
    $errors[] = "description";
}

if (!isset($_POST["urgent"]) ||
    $_POST["urgent"] == ""){
    $errors[] = "urgent";
}

if (!isset($_POST["recup"]) ||
    $_POST["recup"] == ""){
    $errors[] = "recup";
}

if (count($errors) > 0) {
	$_SESSION["errors"] = $errors;
	$_SESSION["old"] = $_POST;
} else {
<<<<<<< Updated upstream
	header("Location: index.php");
=======
>>>>>>> Stashed changes
}




?>

