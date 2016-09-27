<?php
class inscriptionController {
	public function inscription() {
		
		require_once ("/application/models/inscriptionModel.php");
		$inscription = new inscriptionModel ();
		$reqinscription = $inscription->getInscription ();
		require_once ("/application/views/IMIE/inscription.php");
		
		
		if (isset($_POST ["inscriptionFirstname"]) && isset ( $_POST ["inscriptionLastname"] ) && isset ( $_POST ["inscriptionEmail"] ) && isset ( $_POST ["inscriptionPhone"] ) && isset ( $_POST ["inscriptionPassword"] ) && isset ( $_POST ["inscriptionId_grade"] )) 
		{
			$reqinscription = $inscription->setInscription();
			
		} else {
			echo "Inscription Fail !!!";
		}

	}
}

?>