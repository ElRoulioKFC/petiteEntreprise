// include la géolocalisation
<form method="post">


	

	<label for="adresse"> adresse (si le champs reste inchangé nous prendrons les coordonnées gps) :</label><br/>
	<textarea id="adresse" name="adresse" rows="5" cols="33" >
Je préfère prendre mes coordonnées gps.
	</textarea><br/>

	<!--<label for="nomPhoto"> nomPhoto :</label><br/>
	<textarea id="nomPhoto" name="nomPhoto" rows="5" cols="33" required="required">
		nomPhoto pour l'instant
	</textarea><br/> -->


	<label>Type d'animal :</label>
	<select name ="animal">

		<option value="chat">Chat</option>
		<option value="chien">Chien</option>
		<option value="autre">Autre</option>
	</select><br/>

	<label for="description">Description de l'animal :</label><br/>
	<textarea id="description" name="description" rows="5" cols="33" required="required">
Description de l'animal et sa situation...
	</textarea><br/>





	<label>Photo :</label>
	<input type="file" name="photo" required="required"><br/>

	<!--<label>Photo :</label>

	<label>Photo :</label>
	<input type="file" name="photo"><br/>

	
	<input type="radio" name="urgent" value="urgent" >
	<label>Urgent</label> <br/>

	<input type="radio" name="recup" value="recup" >
	<label>J'ai récupéré l'animal</label> <br/>

	<input type="submit" name="signaler" value="Signaler" >

</form>


