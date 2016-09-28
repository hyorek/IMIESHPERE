<?php
require_once 'application/bddConnect/singletonbdd.php';
class listUserModel {
	public function getListUser($role) {
		$req = "SELECT * FROM role INNER JOIN user_role ON role.id_role = user_role.id_role
INNER JOIN user ON user_role.id_user = user.id_user
INNER JOIN grade ON  user.id_grade = grade.id_grade
				ORDER BY grade.name";
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['listUser'] = $tmp;
		return ($tmp);
	}
	/*
	public function delUser($uis){
		$bdd = BDD::getInstance ();
		$reqDelURe = "DELETE FROM user_registration WHERE user_registration.id_user = ".$uid;
		$bdd->queryGet($reqDelURe);
		$reqDelURo = "DELETE FROM user_role WHERE user_role.id_user = ".$uid;
		$bdd->queryGet($reqDelURe);
		$reqDelU = "DELETE FROM user WHERE user.id_user = ".$uid;
		$bdd->queryGet($reqDelURe);
	}
	*/
}

?>