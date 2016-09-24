<?php

require_once('application/views/Layout/header.php');


if (empty($_GET['action'])){
    $_GET['action'] = 'homepage';
}

if ($_GET['action'] == 'inscription') {
    echo "inscription";
    /*
    require_once('target controleurs');

    $inscriptionController = new inscriptionController();
    $inscriptionController->inscription();
    */
} else if ($_GET['action'] == 'connection') {
    echo "connection";
    /*
    require_once('target controleurs');

    $connectionController = new connectionController();
    $connectionController->connection();
    */
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
else if ($_GET['action'] == 'addUser') {
    echo "addUser";
    /*
    require_once('target controleurs');
    
    $addUserController = new addUserController();
    $addUserController->addUser();
    */

}
else if ($_GET['action'] == 'listUser') {
    echo "ListUser";
    /*
    require_once('target controleurs');
    
    $listUserController = new listUserController();
    $listUserController->listUser();
    */

}
else if ($_GET['action'] == 'profil') {
    echo "yourProfil";
    /*
    require_once('target controleurs');
    
    $profilController = new profilController();
    $profilController->profil();
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
    require_once('application/controleurs/listEventControler.php');
    
    $listEventController = new listEventController();
    $listEventController->listEvent();

}
else {
    require_once('application/controleurs/homepageControler.php');
    $homepageController = new homepageController();
    $homepageController->homepage();   
}
require_once('application/views/Layout/footer.php');


/*
if (!empty($_GET['action']) == "lire") {
    // ICI pour lire un article
    require_once("application\controleurs/BlogController.php");
    $blogController = new BlogController();
    $blogController->lire();

} else if (!empty($_GET['action']) == "ajouter_formulaire") {
    // ICI pour lire un article
    echo "ajouter_formulaire";
} else if (!empty($_GET['action']) == "ajouter_article") {
    // ICI pour lire un article
    echo "ajouter_article";
} else {
    echo "ACCUEIL";
}
*/

?>

