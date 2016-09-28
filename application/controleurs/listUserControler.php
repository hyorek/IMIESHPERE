<?php

class listUserController{

    public function listUser(){
            require_once("/application/models/listUserModel.php");
            $listUser = new listUserModel();
            $reqListUser = $listUser->getListUser(-1);
            require_once("/application/views/IMIE/listUser.php");

    }		
}

?>