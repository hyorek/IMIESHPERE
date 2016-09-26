<main>
<div class="container affclean">


		<form method="post" action="inscriptionModel.php">


			<fieldset>
				<legend>INSCRIPTION</legend>
				
				<label for="lastname">Nom :</label> <input type="text"
					name="lastname" id="lastname" placeholder="nom" /> <br /> <label for="firstname">
					Prenom :</label> <input type="text" name="firstname"
					id="firstname" placeholder="prenom" /> <br /> <label for="email"> Email :</label> <input
					type="email" name="pseudo" id="mail" placeholder="Email" /> <br />
				<label for="password"> Mot de passe :</label> <input
					type="password" name="pass" id="pass" placeholder="mot de passe" /> <br /> <label for="phone">
					Numero de telephone :</label> <input type="tel" name="phone" id="phone" placeholder="numero de telephone" />

				<br/>
				<br/>
				<label for="grade">Promotion</label><br /> <select
					name="grade" id="grade">
       	<?php foreach($_POST['insFormPromo'] as $row) { ?>
           <option value="<?php echo $row[1]." ".$row[2] ?>"><?php echo $row[1]." ".$row[2] ?></option>
		<?php }?>
       </select>

</fieldset>
<br/>
<input type="submit" value="Inscription" />

			</p>
		</form>
</div>
</main>