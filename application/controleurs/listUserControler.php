<?php

class listUsertController{

    public function listUser(){
            require_once("/application/models/listUsertModel.php");
            $listUser = new listUsertModel();
            $reqListUser = $listUser->getListUser(-1);
            require_once("/application/views/IMIE/listUser.php");
    }
}

?>