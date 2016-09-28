
<main>
<div class=" container">
	<?php if ($_SESSION['id_role'] == 1) { ?>
	<a class="plus" href="index.php?action=addEvent"><i class="fa fa-plus"
		aria-hidden="true"></i> Ajouter un évènement</a>
		<?php } ?>
</div>
    <?php
				if ($_POST ['listEvent']) {
					
					foreach ( $_POST ['listEvent'] as $row ) {
						?>

    <div id=<?php echo $row['id_event']?>
	onClick="changeVisu(this, 'container event-list', 'container event-list-click')"
	class="container event-list">
	<div class="col-md-11">
		<h4>
			<b><?php echo($row[1]); ?></b>
		</h4>
		<span> <b>Date de l'evenement : </b><?php echo(whodate($row[3])); ?><br />
                <?php
						if ($row [4] != null) {
							print ("<b>Date de fin de l'evenement : </b>" . whodate ( $row [4] )) ;
						}
						?>
                <br /> <b>Address: </b><?php echo $row['street_number']." ".$row['street']." ".$row['postal_code']." ".$row['city_name'] ; ?>
                <br /> <b>Lieux: </b><?php echo $row[11]; ?>
                </span>
		<p>
			<b>Description : </b><?php echo($row[2]); ?><br /> <b><?php echo 'Tarif : 50 €'; ?></b>
		</p>
	</div>
	<div class="col-md-1">
			<?php if ($_SESSION['id_role'] == 1) { ?>
	                <a class="gear col-md-4"
			href="index.php?action=editEvent"><i class="fa fa-cog"
			aria-hidden="true"></i></a>
			<?php } ?>
 <a class="plus col-md-4" href="index.php"><i class="fa fa-plus"
			aria-hidden="true"></i></a>
	</div>
</div>
        <?php
					}
				} else {
					?>
                <div class="container">
	<h4 class="align-center">Pas d'evenement en cours</h4>
</div>
            <?php
				}
				?>
				
</main>
<script type="text/javascript">
function changeVisu(elem, c2, c1)
{
    var i = 0;
    var verifclass = 0;

    if (elem.className === c1)
        verifclass = 1;

    var tmp = document.getElementsByClassName(c1);
    while (i < tmp.length)
        tmp[i++].className = c2;

    if (verifclass === 1)
        elem.className = c2;
    else
        elem.className = c1;
}
</script>
