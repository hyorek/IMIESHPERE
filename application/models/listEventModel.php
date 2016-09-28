<?php
require_once 'application/bddConnect/singletonbdd.php';

class listEventModel {

	public function getListEvent($userID) {
		$req = "SELECT * FROM registration INNER JOIN cost ON cost.id_registration = registration.id_registration INNER JOIN payment ON payment.id_payment = cost.id_payment INNER JOIN cost as costR ON payment.id_payment = costR.id_payment INNER JOIN registration as regi ON regi.id_registration = costR.id_registration INNER JOIN event ON event.id_event = regi.id_event INNER JOIN event_address ON event.id_event = event_address.id_event INNER JOIN address ON event_address.id_address = address.id_address INNER JOIN city ON address.id_city = city.id_city WHERE cost.id_role = 3 ORDER BY registration.date_start DESC";
		/*
		$reqCount = "SELECT COUNT(id_registration) FROM registration WHERE id_event = ".$id_event;
		*/
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['listEvent'] = $tmp;
		
		return ($tmp);
	}
}

?>