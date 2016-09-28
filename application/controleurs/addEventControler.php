<?php
class addEventController {
	public function addEvent() {
		require_once ("/application/models/addEventModel.php");
		$addEvent = new addEventModel ();
		require_once ("/application/views/IMIE/addEvent.php");
		
		if (isset ( $_POST ['nameEvent'] ) && isset ( $_POST ['streeNumber'] ) && isset ( $_POST ['addressEvent'] ) && isset ( $_POST ['villeEvent'] ) && isset ( $_POST ['codePostal'] ) && isset ( $_POST ['place'] ) && isset ( $_POST ['dateStart'] ) && isset ( $_POST ['prixAll'] ) && isset ( $_POST ['descEvent'] ) && isset ( $_POST ['dateEnd'] ) && isset ( $_POST ['nbPlace'] ) && isset ( $_POST ['place'] )) {
			$reqaddEvent = $addEvent->getaddEvent ();
		}
	}
}

?>