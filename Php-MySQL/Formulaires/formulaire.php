<h1>Votre soirée sur mesure</h1>

<form action="cible.php" method="post" enctype="multipart/form-data">	

	<!-- champ de texte standard -->
	<p>Votre nom:<br>
    	<input type="text" name="prenom" />						
	</p>

	<p>
	    Veuillez envoyer votre photo:<br />
	    <input type="file" name="monfichier" /><br />
	    <!-- <input type="submit" value="Envoyer le fichier" /> -->
    </p>

	<!-- liste déroulante -->
	<p>Avec qui voulez vous passer cette soirée?<br>
		<select name="choix">
			<option value="Adriana">Adriana</option>
			<option value="Christina">Christina</option>
			<option value="Emilia">Emilia</option>
			<option value="Emmanuelle">Emmanuelle</option>								
		    <option value="Jennifer">Jennifer</option>
		    <option value="Laetitia">Laetitia</option>
		    <option value="Natalie">Natalie</option>
		    <option value="Rose">Rose</option>
		    <option value="Samantha">Samantha</option>	
		    <option value="Selena">Selena</option>
		    <option value="Vanessa">Vanessa</option>				
		</select>
	</p>

	<!-- cases à cocher -->
	<p>	Quel sera votre choix pour le repas?<br>

		<input type="checkbox" name="case[]" value="Apéritif"/>
			<label for="case">Apéritif</label><br>
			<input type="checkbox" name="case[]" value="Entrée" checked="checked"/>
			<label for="case">Entrée</label><br>
		<input type="checkbox" name="case[]" value="Plat principal" checked="checked"/>
			<label for="case">Entrée</label><br>														
		<input type="checkbox" name="case[]" value="Fromage"/>
			<label for="case">Fromage</label><br>
		<input type="checkbox" name="case[]"  value="Dessert"  checked="checked"/>
			<label for="case">Dessert</label><br>
		<input type="checkbox" name="case[]" value="Café"/>
			<label for="case">Café</label><br>
		<input type="checkbox" name="case[]" value="Digestif"/>
			<label for="case">Digestif</label><br>
	</p>

	<!-- boutons d'option (radio) -->
	<p>															
		Champagne à volonté?									
		<input type="radio" name="champagne" value="Vous avez choisi 'Champagne à volonté'. Vous avez de la thune, vous voulez vous faire plaisir et vous avez bien raison." id="oui" checked="checked" /> <label for="oui">Oui</label>
		<input type="radio" name="champagne" value="Vous êtes pauvre. Vous n'avez aucun goût. On se demande ce que vous foutez ici." id="non" /> <label for="non">Non</label>
	</p>
	
	<!-- champ caché -->
	<p>															
		<input type="hidden" name="pseudo" value="Mateo21" />	
	</p>

	<!-- zone de texte -->
	<p>Suggestions, remarques particulières:<br>
    	<textarea name="message" rows="8" cols="45"></textarea>
	</p>

	<!-- bouton d'envoi -->
	<p>
    	<input type="submit" value="Valider" />					
    </p>
</form>