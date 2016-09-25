<?php

require_once('application/views/Layout/header.php');


if (empty($_GET['action'])){
    $_GET['action'] = 'homepage';
}

if ($_GET['action'] == 'inscription') {

    require_once('application/controleurs/listUserControler.php');

    $inscriptionController = new inscriptionController();
    $inscriptionController->inscription();

} else if ($_GET['action'] == 'connection') {

    require_once('application/controleurs/listUserControler.php');

    $connectionController = new connectionController();
    $connectionController->connection();

}
else if ($_GET['action'] == 'listUser') {
    require_once('application/controleurs/listUserControler.php');
    
    $listUserController = new listUserController();
    $listUserController->listUser();

}
else if ($_GET['action'] == 'addUser') {
    echo "addUser";
    /*
    require_once('target controleurs');
    
    $addUserController = new addUserController();
    $addUserController->addUser();
    */

}
else if ($_GET['action'] == 'editUser') {
    echo "editUser";
    /*
    require_once('target controleurs');
    
    $editUserController = new editUserController();
    $editUserController->editUser();
    */

}
else if ($_GET['action'] == 'listEvent') {
	/* si utilisateur pas connecter l'envoyer sur la page de connection */
    require_once('application/controleurs/listEventControler.php');
    $listEventController = new listEventController();
    $listEventController->listEvent();

}
else if ($_GET['action'] == 'addEvent') {
    echo "addEvent";
    /*
    require_once('target controleurs');
    
    $addEventController = new addEventController();
    $addEventController->addEvent();
    */

}
else if ($_GET['action'] == 'editEvent') {
    echo "editEvent";
    /*
    require_once('target controleurs');
    
    $editEventController = new editEventController();
    $editEventController->editEvent();
    */

}
else if ($_GET['action'] == 'profil') {

    require_once('application/controleurs/profilControler.php');
    
    $profilController = new profilController();
    $profilController->profil();


}
else {
    require_once('application/controleurs/homepageControler.php');
    $homepageController = new homepageController();
    $homepageController->homepage();   
}
require_once('application/views/Layout/footer.php');
