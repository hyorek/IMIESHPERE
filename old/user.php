<html>
    <body>
        <?php require_once 'header.php'; ?>

        <main>

            <?php #Pour repeter autant d'event qu'il y a d'event ?>
            <div onclick="changeVisu(this, 'container event-list-click', 'container event-list');" class="container event-list">
                <div class="col-md-11">
                    <div class="container-fluid">
                        <img class="col-md-4 imgUser" alt="totof du user" src="img/moi.jpg" />
                        <h4 class="col-md-8"><b><?php echo "Nom de l'utilisateur"; ?></b></h4>
                    </div>


                    <p>
                        <b>Description : </b><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dignissim vitae mauris a lacinia. Quisque ut euismod erat, quis pulvinar mi. Etiam ullamcorper varius metus, vel elementum orci semper sed. Maecenas justo ipsum, congue eu ex non, convallis finibus eros. Integer sed sollicitudin neque. Sed eget facilisis ligula. Proin vitae nunc quis tellus rhoncus tempus non sit amet dolor. Etiam aliquet vel urna id sagittis. Nunc massa ligula, elementum eu rhoncus pretium, euismod eu urna.'; ?><br/>
                        <b><?php echo 'Tarif : 68€'; ?></b>
                    </p>
                </div>
                <div class="col-md-1">
                    <?php #afficher les 2 en desous si admin seulement ?>
                    <a class="gear col-md-6" href="index.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
                    <a class="minus col-md-6" href="index.php"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <?php #afficher '+' si user inscrit a l'event sinon afficher '-' ?>
                    <a class="minus col-md-6" href="index.php"><i class="fa fa-minus" aria-hidden="true"></i></a>
                    <a class="plus col-md-6" href="index.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>








        </main>

        <?php include './footer.php'; ?>
    </body>
</html>

<script type="text/javascript">
    function changeVisu(elem, c1, c2)
    {
        if (elem.className == c1)
            elem.className = c2;
        else
            elem.className = c1;
    }
</script>






