<p align="center"><strong>Contact</strong></p>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<form action="envoi.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
<tr>
<td><strong>Envoyer un message</strong></td>
</tr>
<tr>
<td><div align="left">Votre nom :</div></td>
<td><input type="text" name="nom"></td>
</tr>
<tr>
<td width="17%"><div align="left">Votre mail :</div></td>
<td ><input type="text" name="mail" size="45"></td>
</tr>
<tr>
<td><div align="left">Sujet : </div></td>
<td><input type="text" name="objet"></td>
</tr>
<tr>
<td><div align="left">Message : </div></td>
<td><textarea name="message"></textarea></td>
</tr>
<tr>
<td></td>
<td><center>
<input type="reset" name="Submit" value="Réinitialiser le formulaire">
</center></td>
<td width="41%"><center>
<input type="submit" name="Submit" value="Envoyer">
</center></td>
</tr>
</form>
</table>

<!Voici le fichier PHP qui va avec :

<?php 
$nom=$HTTP_POST_VARS['nom']; 
$mail=$HTTP_POST_VARS['mail']; 
$objet=$HTTP_POST_VARS['objet']; 
$message=$HTTP_POST_VARS['message']; 

 
$headers = "MIME-Version: 1.0\r\n"; 

 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$subject="$objet"; 
$destinataire="";
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé<br>"; 
} else { 
echo "Une erreur s'est produite"; 
} 
?>