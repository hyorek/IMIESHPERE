<?php
class addEventController {
	public function addEvent() {
		require_once ("/application/models/addEventModel.php");
		$addEvent = new addEventModel ();
		require_once ("/application/views/IMIE/addEvent.php");
		
		$reqaddEvent = $addEvent->getaddEvent ();
		/*
		 * if(isset($_POST ['nameEvent']) && isset($_POST ['streeNumber']) && isset($_POST ['addressEvent']) && isset($_POST ['villeEvent']) && isset( $_POST ['codePostal']) && isset( $_POST ['dateStat']) && isset($_POST ['prixAll']) && isset($_POST ['prixAdherent']) && isset($_POST ['descEvent'])){
		 * }
		 * else {
		 * echo "Mache pas comme je veu";
		 * }
		 */
	}
}

?>