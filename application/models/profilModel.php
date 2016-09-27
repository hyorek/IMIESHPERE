<?php
require_once 'application/bddConnect/singletonbdd.php';

class profilModel {
	public function getProfil($uid) {
		$bdd = BDD::getInstance ();
		$req = "SELECT * FROM role
		INNER JOIN user_role ON role.id_role = user_role.id_role
		INNER JOIN user ON user_role.id_user = user.id_user
		INNER JOIN grade ON  user.id_grade = grade.id_grade
		WHERE user.id_user = $uid";
		$_POST ['profil'] = $bdd->queryGet ($req);
		
		

		/*
		 * 
		SELECT * FROM user_registration
		INNER JOIN registration ON user_registration.id_registration = registration.id_registration
		INNER JOIN cost ON registration.id_registration = cost.id_registration
        INNER JOIN payment ON cost.id_payment = payment.id_payment
        INNER JOIN cost as costR ON costR.id_payment = payment.id_payment
        INNER JOIN role ON costR.id_role = role.id_role
        INNER JOIN cost as costRR ON costRR.id_role = role.id_role
        INNER JOIN registration as registrationR ON costRR.id_registration = registrationR.id_registration
        INNER JOIN event ON registrationR.id_event = event.id_event
        INNER JOIN event_address ON event_address.id_event = event.id_event
        INNER JOIN address ON address.id_address = event_address.id_address
        WHERE user_registration.id_user = 1 AND role.id_role = 2

		 * 
		 * 

		$req = "SELECT * FROM user_registration
		INNER JOIN registration ON user_registration.id_registration = registration.id_registration
		INNER JOIN cost ON registration.id_registration = cost.id_registration
        INNER JOIN payment ON cost.id_payment = payment.id_payment
        INNER JOIN cost as costR ON costR.id_payment = payment.id_payment
        INNER JOIN role ON costR.id_role = role.id_role
        INNER JOIN costRR ON costRR.id_role = role.id_role
        INNER JOIN registration ON costRR.id_registration = registration.id_registration
        INNER JOIN event ON registration.id_event = event.id_event
        INNER JOIN event_address ON event_address.id_event = event.id_event
        INNER JOIN address ON address.id_address = event_address.id_address
        WHERE user_registration.id_user = $uid";
		*/
		$req = "SELECT * FROM user_registration
		INNER JOIN registration ON user_registration.id_registration = registration.id_registration
		INNER JOIN event ON registration.id_event = event.id_event
		INNER JOIN event_address ON event_address.id_event = event.id_event
		INNER JOIN address ON address.id_address = event_address.id_address
		INNER JOIN city ON address.id_city = city.id_city
		WHERE user_registration.id_user = $uid";
		
		$_POST ['eventProfil'] = $bdd->queryGet($req);
		
		return (null);
	}
}

?>