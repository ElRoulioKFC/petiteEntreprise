<?php 
$errors = [];
 
if (!isset($_POST["description"]) ||
    $_POST["description"] == ""){
    $errors[] = "description";
}
<<<<<<< Updated upstream:control/formulaire/verifrecup.php
=======

if (!isset($_POST["urgent"]) ||
    $_POST["urgent"] == ""){
    $errors[] = "urgent";
}

if (!isset($_POST["recup"]) ||
    $_POST["recup"] == ""){
    $errors[] = "recup";
}
>>>>>>> Stashed changes:pages/verifsignal.php

if (count($errors) > 0) {
	$_SESSION["errors"] = $errors;
	$_SESSION["old"] = $_POST;
	header("Location: signaler.php");
} else {
<<<<<<< Updated upstream:control/formulaire/verifrecup.php
	header("Location: .");
=======
	header("Location: index.php");
>>>>>>> Stashed changes:pages/verifsignal.php
}
?>
