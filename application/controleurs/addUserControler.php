<?php

class addUserController{

	public function addUser(){

		require_once("/application/models/addUserModel.php");
		$addUser = new addUserModel();
		$reqaddUser = $addUser->getaddUser();

		require_once("/application/views/IMIE/addUser.php");
	}
}

?>