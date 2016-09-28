<?php 
require_once 'application/bddConnect/singletonbdd.php';

class userRegistration{
	
	public function setRegistration(){

		$bdd = BDD::getInstance ();
		
		$_SESSION['id_user'] = $verif[0]['id_user'];
		
		
		
		$id_user = $bdd->queryGet("SELECT id_user FROM user_registration WHERE id_user".$_SESSION['id_user']);
		
		if (isset($id_user)){
			echo "Vous êtes déjà enregistré pour cet évènement";
		}	
	}

	
	
	
}
?>