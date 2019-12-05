        
        CREER UN COMPTE (les * sont obligatoire)
        
        <form action="./control/formulaire/creationCompte.php" method="post">
        
        <table><tr><td>Votre nom *: </td><td><input type="text" name="nom" required="required"/></td></tr>
        <tr><td>Votre association : </td><td>  <input type="radio" name="association" value="oui"
         > Oui <input type="radio" name="association" value="non" checked> Non</td></tr>
        <tr><td>Votre site (uniquement pour association): </td><td><input type="text" name="site" /></td></tr>
        <tr><td>Votre adresse mail *: </td><td><input type="text" name="mail" required="required"/></td></tr>
        <tr><td>Votre numero de telephone *: </td><td><input type="text" name="telephone" required="required"/></td></tr>
        <tr><td>Votre adresse *: </td><td><input type="text" name="adresse" required="required"/></td></tr>
        <tr><td>Votre mot de passe *: </td><td><input type="text" name="mdp" required="required"/></td></tr></table>

        <p><input type="submit" value="Creer un compte"></p>
        </form>
      

</body>
</html>