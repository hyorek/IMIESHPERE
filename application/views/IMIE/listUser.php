<main>
<div class=" container">
	<?php if ($_SESSION['id_role'] == 1){ ?>
	<a class="plus" href="index.php?action=addUser"><i class="fa fa-plus"
		aria-hidden="true"></i> Ajouter un utilisateur</a>
		<?php } ?>
		
</div>
    <?php
				if ($_POST ['listUser']) {
					foreach ( $_POST['listUser'] as $row ) {
						?>

    <div id=<?php echo $row['id_user']?>
	class="container event-list">
	<a href="index.php?action=profil&uid=<?php echo $row['id_user']; ?>">
	<div class="col-md-11">

	<div class="col-md-9" ><h3><?php echo $row['firstname']." ".$row['lastname'] ?></h3></div>
	<div class="col-md-3" ><h5><?php echo $row['name']." ".$row['promotion'] ?></h5></div>
	
	<div class="col-md-4"><h5><?php echo "Email : ".$row['email'] ?></h5></div>
	<div class="col-md-4"><h5><?php echo "Portable : ".$row['phone'] ?></h5></div>
	<div class="col-md-4"><h5><?php echo "Role : ".$row[1] ?></h5></div>
	
	</div>
	<div class="col-md-1">
                <a class="gear col-md-4" href="application/views/Layout/notImplementNow.php"><i
			class="fa fa-cog" aria-hidden="true"></i></a>
                <a class="minus col-md-4" href="application/views/Layout/notImplementNow.php"><i
			class="fa fa-close" aria-hidden="true"></i></a>
	</div>
	</a>
</div>
        <?php
					}
				} else {
					?>
                <div class="container">
	<h4 class="align-center">Pas d'utilisateur inscrit</h4>
</div>
            <?php
				}
				?>
				
</main>
