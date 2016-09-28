<?php

require_once 'application/bddConnect/singletonbdd.php';
class inscriptionEventModel {
	
	public function inscriptionEvent($uid, $eid){
		$req = "INSER INTO user_registration(id_user, id_registration, date_registration) VALUES(:id_user, :id_registration, :date_registration)";
		$prep = array(
			'id_user' => $uid,
			'id_registration' => $eid,
			'date_registration' => date("Y/m/d H:i:s")
		);
		
		
	

	
}
}

?>