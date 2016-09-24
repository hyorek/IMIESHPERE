<?php
require_once 'application/bddConnect/singletonbdd.php';
class listUserModel {
	public function getListUser($userID) {
		$req = "SELECT * FROM `user`";
		
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['listUser'] = $tmp;
		
		return ($tmp);
	}
}

?>