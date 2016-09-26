<?php
require_once 'application/bddConnect/singletonbdd.php';

class connectionModel {
	
	public function getconnection() {
		$bdd = BDD::getInstance ();
		
	}
	
	public function setconnection() {
		$bdd = BDD::getInstance ();
		

		$membership_number = secure($_POST["inscMembership_number"]);
		$firstname = secure($_POST["incFirstname"]);
		$lastname = secure($_POST["incLasttname"]);
		$email = secure($_POST["incEmail"]);
		$phone = secure($_POST["incPhone"]);
		$password = secure($_POST["incPassword"]);
		$id_grade = secure($_POST["incId_grade"]);
		
		$id_user = $bdd->queryGet("SELECT id_user FROM user WHERE email = $email");
		
		if (isset($id_user)){
			echo "Cette address email existe deja";
		}
		

		$req = "INSERT INTO user VALUES (:membership_number, :firstname, :lastname, :email, :phone, :password, :id_grade)";
		$prep = array(
				"membership_number" => $membership_number,
				"firstname" => $firstname,
				"lastname" => $lastname,
				"email" => $email,
				"phone" => $phone,
				"password" => $password,
				"id_grade" => $id_grade
		);
		$bdd->execution($req, $prep);
		
		$id_user = $bdd->queryGet("SELECT id_user FROM user WHERE email = $email");
		$req = "INSERT INTO user_role VALUES (:id_role, :id_user)";
		$prep = array(
				"id_role" => 3,
				"id_user" => $id_user
		);
		$bdd->execution($req, $prep);
		
		
		$bdd = BDD::getInstance ();
		$tmp = $bdd->queryGet ( $req );
		$_POST ['connection'] = $tmp;
		
		return ($tmp);
	}
}

?>