<?php

class connectionController{

	public function connection(){

		require_once("/application/models/connectionModel.php");
		$connection = new connectionModel();
		$reqconnection = $connection->getconnection();

		require_once("/application/views/IMIE/connection.php");
	}
}

?>