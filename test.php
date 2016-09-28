<?php

require_once 'application/bddConnect/singletonbdd.php';

$bdd->execution($req, $prep);

$id_user = $bdd->queryGet("SELECT date_start FROM registration");
$req = "INSERT INTO user_role VALUES (:id_role, :id_user)";
$prep = array(
		"id_role" => 3,
		"id_user" => $id_user
);
$bdd->execution($req, $prep);




?>