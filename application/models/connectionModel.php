<?php
require_once 'application/bddConnect/singletonbdd.php';

class connectionModel {
		
	public function getConnection() {
		$bdd = BDD::getInstance ();
		
		$email = $_POST['connectionEmail'];
		$pwd = $_POST['connectionPassword'];
		
		$req = "SELECT * FROM `user_role` INNER JOIN user ON user.id_user = user_role.id_user WHERE `email` = '$email' AND `password` = '$pwd' ";

		$verif = $bdd->queryGet($req);
		
		if (!empty($verif)) {
			session_start();
			if (!isset($_SESSION['count'])) {
				$_SESSION['count'] = 0;
			} else {
				$_SESSION['count']++;
			}
			$_SESSION['ouvert'] = true;
			header('Location: index.php');
		} else {
			echo "FAIL CONNECTION";
		}
	}
}

?>