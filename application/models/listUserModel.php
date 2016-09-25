<?php
require_once 'application/bddConnect/singletonbdd.php';
class listUserModel {
	public function getListUser($userID) {
		$req = "SELECT * FROM role INNER JOIN user_role ON role.id_role = user_role.id_role
INNER JOIN user ON user_role.id_user = user.id_user
INNER JOIN grade ON  user.id_grade = grade.id_grade";
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['listUser'] = $tmp;
		
		return ($tmp);
	}
}

?>