// include la géolocalisation
<form method="post" enctype="multipart/form-data">



	<label for="adresse"> adresse : </label><br/>
	<textarea id="adresse" name="adresse" rows="5" cols="33" >

		<?php 
			if ((isset($_SESSION['cookie_adresseAuto']))){
				$_SESSION['cookie_adresseAuto'];
			} 
			else { echo 'tapez votre adresse ici ...';
			}

		?>

	</textarea><br/>



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
	<input type="file" name="photo">

	<br/>

	
	<input type="radio" name="urgent" value="urgent" >
	<label>Urgent</label> <br/>

	<input type="radio" name="recup" value="recup" >
	<label>J'ai récupéré l'animal</label> 
	<br/>
	<input type="submit" name="signaler" value="Signaler" >

</form>


