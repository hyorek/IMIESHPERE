<!-- formulaire de contact 
-->
<p align="center"><strong>Contact</strong></p>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<form action="envoi.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
<tr>
<td colspan="3"><strong>Envoyer un message</strong></td>
</tr>
<tr>
<td><div align="left">Votre nom :</div></td>
<td colspan="2"><input type="text" name="nom" size="45" maxlength="100"></td>
</tr>
<tr>
<td width="17%"><div align="left">Votre mail :</div></td>
<td colspan="2"><input type="text" name="mail" size="45" maxlength="100"></td>
</tr>
<tr>
<td><div align="left">Sujet : </div></td>
<td colspan="2"><input type="text" name="objet" size="45" maxlength="120"></td>
</tr>
<tr>
<td><div align="left">Message : </div></td>
<td colspan="2"><textarea name="message" cols="50" rows="10"></textarea></td>
</tr>
<tr>
<td></td>
<td width="42%"><center>
<input type="reset" name="Submit" value="Réinitialiser le formulaire">
</center></td>
<td width="41%"><center>
<input type="submit" name="Submit" value="Envoyer">
</center></td>
</tr>
</form>
</table>

Voici le fichier PHP qui va avec :

<?php 
$nom=$HTTP_POST_VARS['nom']; 
$mail=$HTTP_POST_VARS['mail']; 
$objet=$HTTP_POST_VARS['objet']; 
$message=$HTTP_POST_VARS['message']; 

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$subject="$objet"; 
$destinataire="webmaster@votre-site.com"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé<br>"; 
} else { 
echo "Une erreur s'est produite"; 
} 
?></p>
<p align="center">Vous allez bientot etre redirigé vers la page d'acceuil<br>
Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href="http://www.votre-site.com">ici 
</a></p> 