<?php
require_once 'application/bddConnect/singletonbdd.php';
class listEventModel {

	public function getListEvent($userID) {
		$req = "SELECT * FROM `event` 
				INNER JOIN event_address ON event.id_event = event_address.id_event
				INNER JOIN address ON event_address.id_address = address.id_address
				";
		/*
		$req = "SELECT * FROM registration
				
				INENR JOIN cost ON cost.id_registration = registration.id_registration
				INNER JOIN payment ON cost.id_payment = payment.id_payment
				INENR JOIN cost ON cost.id_payment = payment.id_payment
				INNER JOIN role ON cost.id_role = role.id_role
				INNER JOIN cost ON cost.id_role = role.id_role
				INNER JOIN registration ON cost.id_registration = registration.id_registration
				INNER JOIN event ON registration.id_event = event.id_event
				INNER JOIN event_address ON event.id_event = event_address.id_event
				INNER JOIN address ON event_address.id_address = address.id_address

				"
				
				*/
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['listEvent'] = $tmp;
		
		return ($tmp);
	}
}

?>