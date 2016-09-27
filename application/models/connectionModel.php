<?php
require_once 'application/bddConnect/singletonbdd.php';

class connectionModel {
		
	public function getConnection() {
		$bdd = BDD::getInstance ();
		
		$email = $_POST['connectionEmail'];
		$pwd = $_POST['connectionPassword'];
		
		$req = "SELECT * FROM `user_role` INNER JOIN user ON user.id_user = user_role.id_user WHERE `email` = '$email' AND `password` = '$pwd' ";

		$verif = $bdd->queryGet($req);
		$verif = $bdd->fetchData($verif);
		if (!empty($verif)) {
			if (!isset($_SESSION['count'])) {
				$_SESSION['count'] = 0;
			} else {
				$_SESSION['count']++;
			}
			$_SESSION['ouvert'] = true;
			$_SESSION['id_user'] = $verif[0]['id_user'];
			$_SESSION['id_role'] = $verif[0]['id_role'];
				
			header('Location: index.php');
		} else {
			echo "<p class='connectionModel'>Identifiant / mot de passe incorrect</p>";
		}
	}
}

?>