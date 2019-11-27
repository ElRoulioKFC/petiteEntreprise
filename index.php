<?php
session_start();
$title = "acceuil";
if isset($estConnecte) {
	include_once('view/includes/headerCo.php');
}

if not(isset($estConnecte)){
	include_once('view/includes/header.php');
}

 ?>
<body>

<?php 
if not(isset($_GET['page']) {
	include('view/includes/home.php')
}
include('view/includes/'.$_GET['page']);

?>

<?php
include_once("view/includes/footer.php");
 ?>