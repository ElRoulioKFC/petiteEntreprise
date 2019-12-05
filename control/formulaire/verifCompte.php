<?php

    //bdd
    setcookie($_SESSION['cookie_user'], $_POST['nom']);
    header('Location: connect_disconnect.php');
	}
?>