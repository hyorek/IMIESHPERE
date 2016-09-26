<?php

class deconnectionController{

	public function connection(){

		require_once("/application/models/connectionModel.php");
		
		$deconnection = new deconnectionModel();
		$deconnection = setDeconnection();
		header('Location: index.php');
		}
	}
}

?>