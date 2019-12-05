// include la géolocalisation
<form method="post" action="verifsignal.php">
<table align="center">
	<tr><td colspan="2"><input type="button" name="gps" value="Me géolocaliser"></tr>
	<tr>
	<td><label>Type d'animal :</label></td>
	<td><select>
		<option value="chat">Chat</option>
		<option value="chien">Chien</option>
		<option value="autre">Autre</option>
	</select></td>
	</tr>
	<tr>
	<td><label for="description">Description de l'animal :</label></td>
	<td><textarea id="description" name="description" rows="5" cols="33">
Description de l'animal et sa situation...

	</textarea><br/>

	<label>Photo :</label>
	<input type="file" name="photo"><br/>

	
	<input type="radio" name="urgence" value="urgent" >
	<label>Urgent</label> <br/>

	<input type="radio" name="recup" value="recup" >
	<label>J'ai récupéré l'animal</label> <br/>

	<input type="submit" name="signaler" value="Signaler" >


