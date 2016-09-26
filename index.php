<?php

require_once('application/views/Layout/header.php');

if (empty($_GET['action'])){
    $_GET['action'] = 'homepage';
}

if ($_GET['action'] == 'inscription') {

    require_once('application/controleurs/inscriptionControler.php');

    $inscriptionController = new inscriptionController();
    $inscriptionController->inscription();

} else if ($_GET['action'] == 'connection') {

    require_once('application/controleurs/connectionControler.php');

    $connectionController = new connectionController();
    $connectionController->connection();

}
else if ($_GET['action'] == 'listUser') {
    require_once('application/controleurs/listUserControler.php');
    
    $listUserController = new listUserController();
    $listUserController->listUser();

}
else if ($_GET['action'] == 'addUser') {
    require_once('application/controleurs/addUserControler.php');
    
    $addUserController = new addUserController();
    $addUserController->addUser();


}
else if ($_GET['action'] == 'editUser') {

    require_once('application/controleurs/editUserControler.php');
    
    $editUserController = new editUserController();
    $editUserController->editUser();

}
else if ($_GET['action'] == 'listEvent') {
	/* si utilisateur pas connecter l'envoyer sur la page de connection */
    require_once('application/controleurs/listEventControler.php');
    $listEventController = new listEventController();
    $listEventController->listEvent();

}
else if ($_GET['action'] == 'addEvent') {
    require_once('application/controleurs/addEventControler.php');
    
    $addEventController = new addEventController();
    $addEventController->addEvent();

}
else if ($_GET['action'] == 'editEvent') {
    require_once('application/controleurs/editEventControler.php');
    
    $editEventController = new editEventController();
    $editEventController->editEvent();

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
