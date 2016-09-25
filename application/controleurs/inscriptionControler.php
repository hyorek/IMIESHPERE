<?php

class inscriptionController{

	public function inscription(){

		require_once("/application/models/inscriptionModel.php");
		$inscription = new inscriptionModel();
		$reqinscription = $inscription->getInscription();

		require_once("/application/views/IMIE/inscription.php");
	}
}

?>