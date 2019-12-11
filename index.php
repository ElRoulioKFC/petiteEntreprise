<?php
session_start();

$_SESSION['cookie_user'] = "user";
setcookie($_SESSION['cookie_user'], "", time() + (86400 * 30), "/"); //on creer un cookie pour savoir si l'utilisateur est connecté
setcookie($_SESSION['cookie_adresseAuto'], "", time() + (86400 * 30), "/"); 


include_once('model/db.php');
include_once('view/includes/header.php');

if (!isset($_COOKIE[$_SESSION['cookie_user']])) {
	include_once('control/formulaire/seConnecter.php');
	}



if (!(isset($_GET['page']))) {
	include('view/page/home.php');
}
if (isset($_GET['page'])){
	include_once('view/page/'.$_GET['page'].'.php');
	
	if (($_GET['page']) == 'signaler'){
		include('control/formulaire/'.$_GET['page'].'.php');



}}



include_once("view/includes/footer.php");
?>