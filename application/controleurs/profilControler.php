<?php

class profilController{

    public function profil(){
            require_once("/application/models/profilModel.php");
            $profil = new profilModel();
            if (isser($_GET['uid'])) {
            	$reqprofil = $profil->getprofil($_GET['uid']);
            	require_once("/application/views/IMIE/profil.php?uid=");
            	 
            } else {
            	$reqprofil = $profil->getprofil($_POST['uid']);
            	require_once("/application/views/IMIE/profil.php");
            }
    }
}

?>