<?php
require_once 'application/bddConnect/singletonbdd.php';

class profilModel {
	public function getprofil($uid) {
		$bdd = BDD::getInstance ();
		$req = "SELECT * FROM user WHERE id_user = $uid";
		/*
		$reqp = "SELECT * FROM registration 
				INNSER JOIN user_registration ON user_registration.id_registration = registration.id_registration ";
		*/
		$tmp = $bdd->queryGet ($req);
		$_POST ['profil'] = $tmp;
		$_post ['eventProfil'] = $bdd->queryGet($reqp);
		return ($tmp);
	}
}

?>