<?php
session_start();
$_SESSION['cookie_user'] = "user";
setcookie($_SESSION['cookie_user'], "", time() + (86400 * 30), "/"); //on creer un cookie pour savoir si l'utilisateur est connecté
$_SESSION['page'] = "connect";
?>
<!DOCTYPE html>

<html>
<body>
    <header>
         <?php
            if(!isset($_COOKIE[$_SESSION['cookie_user']])) {
                echo '<form action="action.php" method="post">';
                echo '<p>Votre nom : <input type="text" name="nom" /></p>';
                echo '<p>Votre mdp : <input type="text" name="mdp" /></p>';
                echo '<p><input type="submit" value="Connexion"></p>';
                echo '</form>';
                
                echo '<a href="newUser.php">Pas de compte ? Creez en un</a>';
            } else {
                echo "Bonjour " . $_COOKIE[$_SESSION['cookie_user']];
                echo "<br/>";
                echo '<button onclick="deconnexion()">Deconnexion</button>';
            }
        ?>       
    </header>

<script>
    function deconnexion(){
        name = "<?php echo $_SESSION['cookie_user']; ?>";
        document.cookie = `${name}=; expires = Thu, 01 Jan 1970 00:00:00 GMT`; //on detruit le cookie
        document.location.reload(true); //on recharge la page
    }
</script>
</body>
</html>