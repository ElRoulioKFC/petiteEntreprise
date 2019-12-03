<?php 
session_start();
$_SESSION['page'] = "creerCompte";
?>
<!DOCTYPE html>
<html>
<body>
    	

    <?php
        
        echo "CREER UN COMPTE (les * sont obligatoire)";
        echo '<form action="action.php" method="post">';
        
        echo '<table><tr><td>Votre nom *: </td><td><input type="text" name="nom" /></td></tr>';
        echo '<tr><td>Votre association : </td><td><input type="text" name="association" /></td></tr>';
        echo '<tr><td>Votre site (uniquement pour association): </td><td><input type="text" name="site" /></td></tr>';
        echo '<tr><td>Votre adresse mail *: </td><td><input type="text" name="mail" /></td></tr>';
        echo '<tr><td>Votre numero de telephone *: </td><td><input type="text" name="telephone" /></td></tr>';
        echo '<tr><td>Votre adresse *: </td><td><input type="text" name="adresse" /></td></tr>';
        echo '<tr><td>Votre mot de passe *: </td><td><input type="text" name="mdp" /></td></tr></table>';

        echo '<p><input type="submit" value="Creer un compte"></p>';
        echo '</form>';
    ?>       

</body>
</html>