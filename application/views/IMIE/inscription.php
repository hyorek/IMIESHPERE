<main>
<div class="container affclean">
		<form method="post" action="#">
			<fieldset>
				<legend>INSCRIPTION</legend>
				<label for="lastname">Nom :</label> <input type="text" name="inscriptionFirstname" id="inscriptionFirstname" placeholder="nom" />
				<br />
				<label for="firstname">	Prenom :</label> <input type="text" name="inscriptionLastname" id="inscriptionLastname" placeholder="prenom" />
				<br />
				<label for="email"> Email :</label> <input type="email" name="inscriptionEmail" id="inscriptionEmail" placeholder="Email" />
				<br />
				<label for="password"> Mot de passe :</label> <input type="password" name="inscriptionPassword" id="inscriptionPassword" placeholder="mot de passe" />
				<br />
				<label for="phone">Numero de telephone :</label> <input type="tel" name="inscriptionPhone" id="inscriptionPhone" placeholder="numero de telephone" />
				<br/>
				<br/>
				<label for="grade">Promotion</label><br /> <select name="inscriptionId_grade" id="inscriptionId_grade">
       	<?php foreach($_POST['insFormPromo'] as $row) { ?>

           <option value="<?php echo $row[1]." ".$row[2] ?>"><?php echo $row[1]." ".$row[2] ?></option>
		<?php }?>
       </select>

</fieldset>
<br/>
<input type="submit" value="Inscription" />

		</form>
</div>
</main>