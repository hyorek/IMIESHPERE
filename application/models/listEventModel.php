<?php
require_once 'application/bddConnect/singletonbdd.php';
class listEventModel {
	public function getListEvent($userID) {
		$req = "SELECT * FROM `event`";
		
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['listEvent'] = $tmp;
		
		return ($tmp);
	}
}

?>