<?php
require_once 'application/bddConnect/singletonbdd.php';
class listEventModel {
	public function getListEvent($userID) {
		$req = "SELECT * FROM `event` 
				INNER JOIN event_address ON event.id_event = event_address.id_event
				INNER JOIN address ON event_address.id_address = address.id_address
				";
		
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['listEvent'] = $tmp;
		
		return ($tmp);
	}
}

?>