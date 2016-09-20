<main>
    <?php

        foreach ($listEvent as $row) {
        ?>

    <div onclick="changeVisu(this, 'container event-list-click', 'container event-list');" class="container event-list">
        <div class="col-md-11">
            <h4><b><?php echo($row[1]); ?></b></h4>
                <span>
                <b>Date de l'evenement : </b><?php echo(whodate($row[3])); ?><br/>
                <?php
                if ($row[4] != null) {
                    print("<b>Date de fin de l'evenement : </b>" . whodate($row[4]));
                }?>
                <br/>
                <b>Lieux: </b><?php echo 'palce de ttintin'; ?>
                </span>
            <p>
                <b>Description : </b><?php echo($row[2]); ?><br/>
                <b><?php echo 'Tarif : 68€'; ?></b>
            </p>
        </div>
            <div class="col-md-1">
                <?php #afficher les 2 en desous si admin seulement   ?>
                <a class="gear col-md-4" href="index.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
                <?php #afficher '+' si user inscrit a l'event sinon afficher '-'   ?>
                <a class="minus col-md-4" href="index.php"><i class="fa fa-minus" aria-hidden="true"></i></a>
                <a class="plus col-md-4" href="index.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
        </div>
        <?php } ?>
</main>
