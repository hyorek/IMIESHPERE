<?php
require_once 'application/bddConnect/singletonbdd.php';
class addEventModel {
	public function getAddEvent() {
		$bdd = BDD::getInstance ();
		/*
		 * echo $_POST ['nameEvent'];
		 * echo $_POST ['streeNumber'];
		 * echo $_POST ['addressEvent'];
		 * echo $_POST ['villeEvent'];
		 * echo $_POST ['codePostal'];
		 * echo $_POST ['place'];
		 * echo $_POST ['nbPlace'];
		 * echo $_POST ['dateStart'];
		 * echo $_POST ['dateEnd'];
		 * echo $_POST ['prixAll'];
		 * echo $_POST ['prixAdherent'];
		 * echo $_POST ['descEvent'];
		 */
		/*
		if (! isset ( $_POST ['place'] )) {
			$_POST ['place'] = null;
		}
		if (! isset ( $_POST ['nbPlace'] )) {
			$_POST ['nbPlace'] = null;
		}
		if (! isset ( $_POST ['dateEnd'] )) {
			$_POST ['dateEnd'] = null;
		}
		*/
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqEvent = "INSERT INTO event(name, description, date_start, date_end) VALUES (:name, :description, :date_start, :date_end)";
		$prepEvent = array (
				'name' => $_POST ['nameEvent'],
				'description' => $_POST ['descEvent'],
				'date_start' => $_POST ['dateStart'],
				'date_end' => $_POST ['dateEnd'] 
		);
		$bdd->execution ( $reqEvent, $prepEvent );
		$idReqEvent = "SELECT * FROM event WHERE name = '" . $_POST ['nameEvent'] . "' AND date_start = '" . $_POST ['dateStart'] . "'";
		$eventFetch = $bdd->queryGet ( $idReqEvent );
		$tmp = $bdd->fetchData ( $eventFetch );
		$id_event = $tmp [0] ['id_event'];
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqCity = "INSERT INTO city(city_name, postal_code) VALUES (:city_name, :postal_code)";
		$prepCity = array (
				'city_name' => $_POST ['villeEvent'],
				'postal_code' => $_POST ['codePostal'] 
		);
		$bdd->execution ( $reqCity, $prepCity );
		$idReqCity = "SELECT * FROM city WHERE city_name = '" . $_POST ['villeEvent'] . "' AND postal_code = '" . $_POST ['codePostal'] . "'";
		$cityFetch = $bdd->queryGet ( $idReqCity );
		$tmp = $bdd->fetchData ( $cityFetch );
		$id_city = $tmp [0] ['id_city'];
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqAddress = "INSERT INTO address(street, street_number, name, id_city) VALUES (:street, :street_number, :name, :id_city)";
		$prepAddress = array (
				'street' => $_POST ['addressEvent'],
				'street_number' => $_POST ['streeNumber'],
				'name' => $_POST ['place'],
				'id_city' => $id_city 
		);
		$bdd->execution ( $reqAddress, $prepAddress );
		$idReqAddresse = "SELECT * FROM address WHERE street = '" . $_POST ['addressEvent'] . "' AND street_number = '" . $_POST ['streeNumber'] . "' AND name = '" . $_POST ['place'] . "' AND id_city = " . $id_city;
		$addressFetch = $bdd->queryGet ( $idReqAddresse );
		$tmp = $bdd->fetchData ( $addressFetch );
		$id_address = $tmp [0] ['id_address'];
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqEventAddress = "INSERT INTO event_address(id_event, id_address) VALUES (:id_event, :id_address)";
		$prepEventAddress = array (
				'id_event' => $id_event,
				'id_address' => $id_address 
		);
		$bdd->execution ( $reqEventAddress, $prepEventAddress );
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqRegistration = "INSERT INTO registration(place, date_start, date_end, id_event) VALUES (:place, :date_start, :date_end, :id_event)";
		$prepRegistration = array (
				'place' => $_POST ['nbPlace'],
				'date_start' => $_POST ['dateStart'],
				'date_end' => $_POST ['dateEnd'],
				'id_event' => $id_event 
		);
		$bdd->execution ( $reqRegistration, $prepRegistration );
		$idReqRegistration = "SELECT * FROM registration WHERE place = '" . $_POST ['nbPlace'] . "' AND date_start = '" . $_POST ['dateStart'] . "' AND date_end = '" . $_POST ['dateEnd'] . "' AND id_event = " . $id_event;
		$registrationFetch = $bdd->queryGet ( $idReqRegistration );
		$tmp = $bdd->fetchData ( $registrationFetch );
		$id_registration = $tmp [0] ['id_registration'];
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqPayment = "INSERT INTO payment(price) VALUES (:price)";
		$prepReqPayment = array (
				'price' => $_POST ['prixAll'] 
		);
		$bdd->execution ( $reqPayment, $prepReqPayment );
		$idReqPayment = "SELECT * FROM payment WHERE price = " . $_POST ['prixAll'];
		$paymentFetch = $bdd->queryGet ( $idReqPayment );
		$tmp = $bdd->fetchData ( $paymentFetch );
		$id_payment = $tmp [0] ['id_payment'];
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqCost = "INSERT INTO cost(id_registration, id_payment, id_role) VALUES (:id_registration, :id_payment, :id_role)";
		$prepReqCost = array (
				'id_registration' => $id_registration,
				'id_payment' => $id_payment,
				'id_role' => 3 
		);
		$bdd->execution ( $reqCost, $prepReqCost );
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqPaymentAd = "INSERT INTO payment(price) VALUES (:price)";
		$prepReqPaymentAd = array (
				'price' => $_POST ['prixAdherent'] 
		);
		$bdd->execution ( $reqPaymentAd, $prepReqPaymentAd );
		$idReqPaymentAd = "SELECT * FROM payment WHERE price = " . $_POST ['prixAdherent'];
		$paymentAdFetch = $bdd->queryGet ( $idReqPaymentAd );
		$tmp = $bdd->fetchData ( $paymentAdFetch );
		$id_paymentAd = $tmp [0] ['id_payment'];
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		$reqCostAd = "INSERT INTO cost(id_registration, id_payment, id_role) VALUES (:id_registration, :id_payment, :id_role)";
		$prepReqCostAd = array (
				'id_registration' => $id_registration,
				'id_payment' => $id_paymentAd,
				'id_role' => 2 
		);
		$bdd->execution ( $reqCostAd, $prepReqCostAd );
		/* --------------------------------------------------------------- */
		//echo "ICI ça Mache";
		/* --------------------------------------------------------------- */
		header('Location: index.php?action=listEvent');
	}
}

?>