<main>
<div class="container affclean">


		<form method="post" action="addEventModel.php">


			<fieldset>
				<legend>AJOUTER UN EVENEMENT</legend>
				
				<label for="name">Nom de l'évènement : </label>
				<input type="text" name="name" id="name" placeholder="nom" />
				<br/>
				<label>Numero de voie : </label>
				<input type="number" name="address" id="address" placeholder="9" />
				<br/>
				<label>Adress de l'évènement : </label>
				<input type="text" name="address" id="address" placeholder="rue de machin truc" />
				<br/>
				<label>Lieux de l'évènement : </label>
				<input type="text" name="address" id="address" placeholder="Bar du machin truc" />
				<br/>
				<label for="name">Date de debut l'évènement : </label>
				<input type="date" />
				<br/>
				<label>Prix : </label>
				<input type="number" name="address" id="address" />
				<br/>
				<input type="checkbox" id="prixboxcheck" onclick="griser('prixboxcheck','prixAdherent')">
				<label>Prix adherent : </label>
				<input type="number" name="address" id="prixAdherent" disabled="disabled" />
				<br/>
				<input type="checkbox" id="boxcheck" onclick="griser('boxcheck','datecheck')">
				<label for="name">Date de fin l'évènement : </label>
				<input type="date" id="datecheck" disabled="disabled" />
				<br/>
				<br/>
				<label>Description de l'évènement : </label>
				<br/>
				<textarea rows="10" cols="80"></textarea>
				
</fieldset>
<br/>
<input type="submit" value="Envoyer" />

			</p>
		</form>
</div>
</main>
<script>
	function griser(idbox, idelem) {
		box = document.getElementById(idbox);
		elem = document.getElementById(idelem)

		
		if (box.checked == true) {
			elem.disabled = false;			
		} else {
			elem.disabled = true;
		}
	
	}
</script>