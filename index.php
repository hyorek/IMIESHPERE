<?php
session_start ();
require_once ('application/views/Layout/header.php');


if (empty ( $_GET ['action'] )) {
	$_GET ['action'] = 'homepage';
}

if ($_GET ['action'] == 'inscription') {
	
	require_once ('application/controleurs/inscriptionControler.php');
	
	$inscriptionController = new inscriptionController ();
	$inscriptionController->inscription ();
} else if ($_GET ['action'] == 'connection') {
	
	require_once ('application/controleurs/connectionControler.php');
	
	$connectionController = new connectionController ();
	$connectionController->connection ();
} else if ($_GET ['action'] == 'deconnection') {
	if (isset ( $_SESSION ['id_role'] )) {
		
		require_once ('application/controleurs/deconnectionControler.php');
		
		$deconnectionController = new deconnectionController ();
		$deconnectionController->deconnection ();
	} else {
		header ( 'Location: index.php?action=connection' );
	}
} else if ($_GET ['action'] == 'listUser') {
	if (isset ( $_SESSION ['id_role'] )) {
		if (($_SESSION ['id_role']) == 1) {
			
			require_once ('application/controleurs/listUserControler.php');
			
			$listUserController = new listUserController ();
			$listUserController->listUser ();
		} else {
			header ( 'Location: index.php' );
		}
	} else {
		header ( 'Location: index.php?action=connection' );
	}
} else if ($_GET ['action'] == 'addUser') {
	if (isset ( $_SESSION ['id_role'] )) {
		if (($_SESSION ['id_role']) == 1) {
			require_once ('application/controleurs/addUserControler.php');
			
			$addUserController = new addUserController ();
			$addUserController->addUser ();
		} else {
			header ( 'Location: index.php' );
		}
	} else {
		header ( 'Location: index.php?action=connection' );
	}
} else if ($_GET ['action'] == 'editUser') {
	if (isset ( $_SESSION ['id_role'] )) {
			require_once ('application/controleurs/editUserControler.php');
			$editUserController = new editUserController ();
			$editUserController->editUser ();
	} else {
		header ( 'Location: index.php?action=connection' );
	}
} else if ($_GET ['action'] == 'listEvent') {
	if (isset ( $_SESSION ['id_role'] )) {
		require_once ('application/controleurs/listEventControler.php');
		$listEventController = new listEventController ();
		$listEventController->listEvent ();
	} else {
		header ( 'Location: index.php?action=connection' );
	}
} else if ($_GET ['action'] == 'addEvent') {
	if (isset ( $_SESSION ['id_role'] )) {
		if (($_SESSION ['id_role']) == 1) {
			require_once ('application/controleurs/addEventControler.php');
			
			$addEventController = new addEventController ();
			$addEventController->addEvent ();
		} else {
			header ( 'Location: index.php' );
		}
	} else {
		header ( 'Location: index.php?action=connection' );
	}
} else if ($_GET ['action'] == 'editEvent') {
	if (isset ( $_SESSION ['id_role'] )) {
		if (($_SESSION ['id_role']) == 1) {
			require_once ('application/controleurs/editEventControler.php');
			
			$editEventController = new editEventController ();
			$editEventController->editEvent ();
		} else {
			header ( 'Location: index.php' );
		}
	} else {
		header ( 'Location: index.php?action=connection' );
	}
} else if ($_GET ['action'] == 'profil') {
	if (isset ( $_SESSION ['id_role'] )) {
		require_once ('application/controleurs/profilControler.php');
		$profilController = new profilController ();
		$profilController->profil ();
	} else {
		header ( 'Location: index.php?action=connection' );
	}
} else {
	require_once ('application/controleurs/homepageControler.php');
	$homepageController = new homepageController ();
	$homepageController->homepage ();
}
require_once ('application/views/Layout/footer.php');
