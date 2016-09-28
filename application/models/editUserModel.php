<?php
require_once 'application/bddConnect/singletonbdd.php';

class addUserModel {
		
	public function getUserInfo($idUser) {
		$bdd = BDD::getInstance ();
		$req = "SELECT * FROM grade INNER JOIN user ON user.id_grade = grade.id_grade
		INNER JOIN user_role ON user_role.id_user = user.id_user
		INENR JOIN role ON user_role.id_role = role.id_role
		WHERE user.id_user = $idUser";
		$infoUser = $bdd->queryGet($req);
	}

}
?>