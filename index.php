<?php
session_start();
$title = "acceuil";
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

include('view/page/'.$_GET['page'].'.php');
?>

<?php
include_once("view/includes/footer.php");
 ?>