<main>
<div class="container affclean">


		<form method="post" action="index.php">


			<fieldset>
				<legend>AJOUTER UN EVENEMENT</legend>
				
				<label for="name">Nom de l'évènement : </label>
				<input type="text" name="nameEvent" id="nameEvent" placeholder="Titre" />
				<br/>
				<label>Numero de voie : </label>
				<input type="text" name="streeNumber" id="streeNumber" placeholder="42 bis" />
				<br/>
				<label>Adress de l'évènement : </label>
				<input type="text" name="addressEvent" id="addressEvent" placeholder="Rue Maupertuis" />
				<br/>
				<label>Ville : </label>
				<input type="text" name="villeEvent" id="villeEvent" placeholder="Rennes" />
				<br/>
				<label>Code postal : </label>
				<input type="text" name="codePostal" id="codePostal" placeholder="35700" />
				<br/>
				<label>Lieux de l'évènement : </label>
				<input type="text" name="place" id="place" placeholder="IMIE" />
				<br/>
				<label>Nombre de place : </label>
				<input type="number" name="nbPlace" id="address" placeholder="42" />
				<br/>
				<label for="name">Date de debut l'évènement : </label>
				<input type="datetime" name="dateStart" id="dateStart" placeholder="yyyy-mm-dd hh:mm:ss" />
				<br/>
				<input type="checkbox" id="boxcheck" onclick="griser('boxcheck','dateEnd')">
				<label for="name">Date de fin l'évènement : </label>
				<input type="datetime" name="dateEnd" id="dateEnd" disabled="disabled" placeholder="yyyy-mm-dd hh:mm:ss" />
				<br/>
				<label>Prix : </label>
				<input type="number" name="prixAll" id="prixAll" step="0.01" />
				<br/>
				<input type="checkbox" id="prixboxcheck" onclick="griser('prixboxcheck','prixAdherent')">
				<label>Prix adherent : </label>
				<input type="number" name="prixAdherent" id="prixAdherent" disabled="disabled" step="0.01" />
				<br/>
				<br/>
				<label>Description de l'évènement : </label>
				<br/>
				<textarea name="descEvent" id="descEvent" rows="10" cols="80" placeholder="Description" ></textarea>
</fieldset>
<br/>
<input type="submit" value="Envoyer" />

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