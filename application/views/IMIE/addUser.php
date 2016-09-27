<main>
<div class="container affclean">


		<form method="post" action="inscriptionModel.php">
			<fieldset>
				<legend>AJOUTER UN UTILISATEUR</legend>

				
				<label for="lastname">Numero de membre :</label>
				<input type="text" name="membershipNumber" id="membershipNumber" placeholder="" />
				<br />				
				<label for="lastname">Nom :</label>
				<input type="text" name="lastname" id="lastname" placeholder="nom" />
				<br />
				<label for="firstname">Prenom :</label>
				<input type="text" name="firstname"	id="firstname" placeholder="prenom" />
				<br />
				<label for="email"> Email :</label>
				<input type="email" name="pseudo" id="mail" placeholder="Email" />
				<br />
				<label for="password"> Mot de passe :</label>
				<input type="password" name="pass" id="pass" placeholder="mot de passe" />
				<br />
				<label for="phone">Numero de telephone :</label>
				<input type="tel" name="phone" id="phone" placeholder="numero de telephone" />
				<br/>
				<br/>
				<label for="grade">Promotion</label>
				<br />
				<select	name="grade" id="grade"> 
				<?php foreach($_POST['grade'] as $row) { ?>
				<option value="<?php echo $row[0]?>">
				<?php echo $row[1]." ".$row[2] ?></option><?php }?>
			    </select>
				<br/>
				<label for="grade">Rang</label>
				<br />
				<select	name="role" id="role"> 
				<?php foreach($_POST['role'] as $row) { ?>
				<option value="<?php echo $row[0]?>">
				<?php echo $row[1] ?></option><?php }?>
			    </select>


</fieldset>
<br/>
<input type="submit" value="Envoyer" />

		</form>
</div>
</main>