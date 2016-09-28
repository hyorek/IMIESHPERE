<?php

class addUserController{

	public function addUser(){

		require_once("/application/models/addUserModel.php");
		$addUser = new addUserModel();
		$reqaddUser = $addUser->getAddUser();

		require_once("/application/views/IMIE/addUser.php");
	}
}

?>