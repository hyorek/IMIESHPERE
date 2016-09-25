<?php

class profilController{

    public function profil(){
            require_once("/application/models/profilModel.php");
            $profil = new profilModel();
            $reqprofil = $profil->getprofil($_POST['uid']);
            require_once("/application/views/IMIE/profil.php");
    }
}

?>