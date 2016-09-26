<?php

class deconnectionController{

	public function deconnection(){

		require_once("/application/models/deconnectionModel.php");
		$deconnection = new deconnectionModel();
		$deconnection->setDeconnection();
		header('Location: index.php');
		}
	}

?>