<main>
<div class=" container">
</div>
    <?php
    
    	if (isset($_GET['uid'])) {
    	}
				if ($_POST['profil']) {
					foreach ( $_POST ['profil'] as $row ) {
						?>
    <div id=<?php echo $row['id_user']?>
	class="container affclean">
	<div class="col-md-11">

	<div class="col-md-9" ><h3><?php echo $row['firstname']." ".$row['lastname'] ?></h3></div>
	<div class="col-md-3" ><h5><?php echo $row['name']." ".$row['promotion'] ?></h5></div>
	
	<div class="col-md-4"><h5><?php echo "Email : ".$row['email'] ?></h5></div>
	<div class="col-md-4"><h5><?php echo "Portable : ".$row['phone'] ?></h5></div>
	<div class="col-md-4"><h5><?php echo "Role : ".$row[1] ?></h5></div>
	
	</div>
	<div class="col-md-1">
                <a class="gear col-md-4" href="index.php"><i
			class="fa fa-cog" aria-hidden="true"></i></a>
			<?php /*afficher si admin*/  ?>
                <a class="minus col-md-4" href="index.php"><i
			class="fa fa-close" aria-hidden="true"></i></a>
	</div>
</div>
        <?php
					}
				} else {
					?>
                <div class="container">
	<h4 class="align-center">Aucun utilisateur n'existe avec cette id</h4>
</div>
            <?php
				}
				?>
				
</main>
