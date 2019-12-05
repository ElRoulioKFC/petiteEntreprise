<?php

    //bdd
    setcookie($_SESSION['cookie_user'], $_POST['nom']);
    header('Location: ./index.php');
	}
?>