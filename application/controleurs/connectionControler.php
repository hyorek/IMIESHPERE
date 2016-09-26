<?php

class connectionController{

	public function connection(){

		require_once("/application/models/connectionModel.php");
		require_once("/application/views/IMIE/connection.php");
		
		$connection = new connectionModel();
		if (isset($_POST['connectionEmail']) && isset($_POST['connectionPassword'])) {
			$connection->getConnection();
		}
	}
}

?>