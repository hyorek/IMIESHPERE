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
		
		$id_user = $bdd->queryGet ( "SELECT id_user FROM user WHERE email = $email" );
		if (!isset($id_user)) {
			echo "l'address email $email existe deja";
		} else {				
			$req = "INSERT INTO user VALUES (:firstname, :lastname, :email, :phone, :password, :id_grade)";
			$prep = array (
					"firstname" => $firstname,
					"lastname" => $lastname,
					"email" => $email,
					"phone" => $phone,
					"password" => $password,
					"id_grade" => $id_grade 
			);
			$bdd->execution ( $req, $prep );
			
			$id_user = $bdd->queryGet ( "SELECT id_user FROM user WHERE email = $email" );
			print_r($id_user[0]);
				
			$req = "INSERT INTO user_role VALUES (:id_role, :id_user)";
			$prep = array (
					"id_role" => 3,
					"id_user" => $id_user[0]['id_user']
			);
			$bdd->execution ( $req, $prep );
			header('Location: index.php?action=connection');
		}
		
		return (null);
	}
}

?>