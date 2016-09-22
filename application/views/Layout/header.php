<?php
require_once ('application/bddConnect/singletonbdd.php');
require_once ('assets/phpFunction/phpFunction.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>IMIE Sphère</title>
<meta name="description" content="">

<link rel="shortcut icon" href="/assets/img/favicon.ico"
	type="image/x-icon">
<link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<header class="toppage">
		<div class="container">
			<a href="index.php"><img class="logoimies pull-left" alt="IMIESpere"
				src="assets/img/Imie_sphere.jpg" /></a>
			<h2 class="titre pull-left">IMIE Sphère</h2>
			<a href="http://imie-ecole-informatique.fr/"><img
				class="logoimie pull-right" alt="IMIESpere"
				src="assets/img/Imie.png" /></a>
		</div>
		<div class="clearfix"></div>
		<nav class="navbar center">
			<div class="container-fluid navbar-inverse ">

            <?php #si user non connecter ne pas afficher les icones   ?>
            <?php #si user connecter afficher les icones sauf gestion user ?>
            <?php #si admin connecter afficher toutes les icones ?>

            <div class="container">
					<ul class="nav navbar-nav ">
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>
								Accueil</a></li>
						<li><a href="index.php?action=profil"><span
								class="glyphicon glyphicon-user"></span> Profil</a></li>
						<li><a href="index.php?action=listUser"><span
								class="glyphicon glyphicon-user"></span> Gestion utilisateur</a></li>
						<li><a href="index.php?action=listEvent"><span
								class="glyphicon glyphicon-align-justify"></span> Evenement</a></li>
						<li><a href="index.php?action=aboutUs"><span
								class="glyphicon glyphicon-tower"></span> Nous</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">

                    <?php #si user connecter afficher deconnecion a la plase de connexion et inscription   ?>
                    <li><a href="index.php?action=inscription"><span
								class="glyphicon glyphicon-floppy-disk"></span> Inscription</a></li>
						<li><a href="index.php?action=connection"><span
								class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
						<li><a href="index.php?action=deco"><span
								class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>