<?php

    include_once('../../model/db.php');
    setcookie($_SESSION['cookie_user'], $_POST['nom']);
    header('Location: ./index.php');
	}
?>