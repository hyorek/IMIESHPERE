<?php
require_once 'application/bddConnect/singletonbdd.php';
class inscriptionModel {
	public function getInscription() {
		$bdd = BDD::getInstance ();
		
		$req = "SELECT * FROM grade";
		$_POST ['insFormPromo'] = $bdd->queryGet ( $req );
	}
	
	public function setInscription() {
		$bdd = BDD::getInstance ();
		$firstname = $_POST ["inscriptionFirstname"];
		$lastname = $_POST ["inscriptionLastname"];
		$email = $_POST ["inscriptionEmail"];
		$phone = $_POST ["inscriptionPhone"];
		$password = $_POST ["inscriptionPassword"];
		$id_grade = $_POST ["inscriptionId_grade"];
		
		$id_user = $bdd->queryGet ("SELECT * FROM user WHERE email = '$email'" );
		$id_user = $bdd->fetchData($id_user);
		//print_r($id_user);
		if (!empty($id_user)) {
			echo "l'address email $email existe deja";
		} else {			
			$reqUser = "INSERT INTO user (firstname, lastname, email, phone, password, id_grade) VALUES (:firstname, :lastname, :email, :phone, :password, :id_grade)";
			$prepUser = array (
					'firstname' => $firstname,
					'lastname' => $lastname,
					'email' => $email,
					'phone' => $phone,
					'password' => $password,
					'id_grade' => $id_grade 
			);
			$bdd->execution ( $reqUser, $prepUser );
			$newIdUser = $bdd->queryGet ("SELECT * FROM user WHERE email = '$email'");
			$userInfo = $bdd->fetchData($newIdUser);
			$req = "INSERT INTO user_role(id_role, id_user) VALUES (:id_role, :id_user)";
			$prep = array (
					"id_role" => 3,
					"id_user" => $userInfo[0][0]
			);
			$bdd->execution ( $req, $prep );
			header('Location: index.php');				
		}
		
		return (null);
	}
}

?>