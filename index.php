

<?php

session_start();
$_SESSION['cookie_user'] = "user";
setcookie($_SESSION['cookie_user'], "", time() + (86400 * 30), "/"); //on creer un cookie pour savoir si l'utilisateur est connecté
$_SESSION['page'] = "connect";

include_once('model/db.php');
if (isset ($estConnecte)) {
	include_once('view/includes/headerCo.php');
}
if (! ( isset ($estConnecte))){
	include_once('view/includes/header.php');
}

 ?>


<?php 
if (!(isset($_GET['page']))) {
	include('view/page/home.php');
}
if (isset($_GET['page'])){
include('view/page/'.$_GET['page'].'.php');
if (($_GET['page']) == ("recuperer")){
	include_once('control/formulaire/verifsignal.php');
}}
?>

<?php
include_once("view/includes/footer.php");
?>