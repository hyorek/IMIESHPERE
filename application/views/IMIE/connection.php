<main>
<div class="container affclean">


	<form method="post" action="index.php?action=connection">
		<fieldset>
			<legend>CONNEXION</legend>
			<label for="email"> Email :</label>
			<input type="email" name="connectionEmail" id="connectionEmail" placeholder="Email" />
			<br /> <label for="password"> Mot de passe :</label>
			<input type="password" name="connectionPassword" id="connectionPassword" placeholder="mot de passe" />
			<br />
		</fieldset>
		<br />
		<?php if (isset($_POST['ERR'])) { ?>
		<div class="alert alert-danger" role="alert">
 			 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  			<span class="sr-only">Error:</span>
  			Email ou mot de passe invalide
		</div>
		<?php } ?>
		<br /> <input type="submit" value="Connexion" />
	</form>
</div>
</main>