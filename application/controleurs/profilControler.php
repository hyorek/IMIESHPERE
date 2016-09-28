<?php

class profilController{

    public function profil(){
            require_once("/application/models/profilModel.php");
            $profil = new profilModel();
            if (isset($_GET['uid'])) {
            	$reqProfil = $profil->getProfil($_GET['uid']);
            	require_once("/application/views/IMIE/profil.php");
            	 
            } else {
            	$reqProfil = $profil->getProfil($_SESSION['id_user']);
            	require_once("/application/views/IMIE/profil.php");
            }
    }
}

?>