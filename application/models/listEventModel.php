<?php
require_once 'application/bddConnect/singletonbdd.php';
class listEventModel {

	public function getListEvent($userID) {
		
		$req = "SELECT * FROM `event` 
				INNER JOIN event_address ON event.id_event = event_address.id_event
				INNER JOIN address ON event_address.id_address = address.id_address
				INNER JOIN city ON address.id_city = city.id_city
				";
				
				/*		
				$req = "SELECT * FROM role
INNER JOIN cost ON cost.id_role = role.id_role
INNER JOIN payment ON payment.id_payment = cost.id_payment
INNER JOIN cost as costR ON payment.id_payment = costR.id_payment
INNER JOIN registration ON registration.id_registration = costR.id_registration
INNER JOIN event ON registration.id_event = event.id_event
INNER JOIN event_address ON event_address.id_event = event.id_event
INNER JOIN address ON event_address.id_address = address.id_address
INNER JOIN city ON address.id_city = city.id_city";
				*/
				
		
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['listEvent'] = $tmp;
		
		return ($tmp);
	}
}

?>