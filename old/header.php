<?php

require_once './bdd_connecte.php';

?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo'IMIE Sphère'; ?></title>

    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href="/img/favicon.ico" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>



</head>
<header class="toppage ">

    <div class="container">
        <a href="index.html"><img class="logoimies pull-left" alt="IMIESpere" src="img/Imie_sphere.jpg" /></a>
        <h2 class="titre pull-left">IMIE Sphère</h2>
        <a href="http://imie-ecole-informatique.fr/"><img class="logoimie pull-right" alt="IMIESpere" src="img/Imie.png" /></a>
    </div>
    <div class="clearfix"></div>
    <nav class="navbar center">
        <div class="container-fluid navbar-inverse ">

            <?php #si user non connecter ne pas afficher les icones   ?>
            <?php #si user connecter afficher les icones sauf gestion user ?>
            <?php #si admin connecter afficher toutes les icones ?>

            <div class="container">
                <ul class="nav navbar-nav ">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
                    <li><a href="userpage.php"><span class="glyphicon glyphicon-user"></span> <?php echo 'User name'; ?></a></li>
                    <li><a href="event.php"><span class="glyphicon glyphicon-align-justify"></span> Evenement</a></li>
                    <li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Gestion utilisateur</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-tower"></span> Nous</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <?php #si user connecter afficher deconnecion a la plase de connexion et inscription   ?>
                    <li><a href="sign.php"><span class="glyphicon glyphicon-floppy-disk"></span> Inscription</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Connexion <span class="caret"></span></a>
                        <ul class="dropdown-menu login-bar">
                            <form class="form" role="form" method="post" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                    <label class="sr-only" for="login">Login</label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Login" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block">GO !!!</button>
                                </div>
                            </form>
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
