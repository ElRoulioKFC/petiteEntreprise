<?php 
$errors = [];
 
if (!isset($_POST["description"]) ||
    $_POST["description"] == ""){
    $errors[] = "description";
}

if (count($errors) > 0) {
	$_SESSION["errors"] = $errors;
	$_SESSION["old"] = $_POST;
	header("Location: signaler.php");
} else {
	header("Location: .");
}
?>
