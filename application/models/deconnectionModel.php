<?php
require_once 'application/bddConnect/singletonbdd.php';

class deconnectionModel {
		
	public function setDeconnection() {
		session_destroy() ;
	}
}

?>