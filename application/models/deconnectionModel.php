<?php
require_once 'application/bddConnect/singletonbdd.php';

class deconnectionModel {
		
	public function setDeconnection() {
		$_SESSION['ouvert'] = false;
		$_SESSION['id_user'] = 0;
		$_SESSION['id_role'] = 0;
		session_destroy() ;
	}
}

?>