<?php

function whodate($dates) {

    $y = substr($dates, 0, 4);
    $m = substr($dates, 5, 2);
    $d = substr($dates, 8, 2);
    $h = substr($dates, 11, 2);
    $sep = substr($dates, 13, 1);
    $min = substr($dates, 14, 2);
    $DayD = MikeKeith($d, $m, $y);
    $Mon = getmon($m);
    $alldate = ("Le " . $DayD . " " . $d . " " . $Mon . " " . $y . " à " . $h . $sep . $min);
    return($alldate);
}

function MikeKeith($d, $m, $y) {
    $d = intval($d);
    $m = intval($m);
    $y = intval($y);
    $z = $y;
    $Day = 0;
    if ($m < 3) {
        $y = $y - 1;
        $Day = (((int) ((23 * $m) / 9)) + $d + 4 + $z + ((int) ($y / 4) - ((int) ($y / 100))) + ((int) ($y / 400))) % 7;
    } else if ($m >= 3) {
        $Day = ((((int) ((23 * $m) / 9)) + $d + 4 + $z + ((int) ($y / 4) - ((int) ($y / 100))) + ((int) ($y / 400))) - 2) % 7;
    }
    $tmp = VerifDate($Day);
    return($tmp);
}

function VerifDate($Day) {
    if ($Day == 0) {
        return("Dimanche");
    }if ($Day == 1) {
        return("Lundi");
    }if ($Day == 2) {
        return("Mardi");
    }if ($Day == 3) {
        return("Mercredi");
    }if ($Day == 4) {
        return("Jeudi");
    }if ($Day == 5) {
        return("Vendredi");
    }if ($Day == 6) {
        return("Samedi");
    } else {
        return("ERROR");
    }
}

//<----- Mois en lettres ----->
function getmon($mon) {
    if ($mon == "01") {
        return "Janvier";
    }
    if ($mon == "02") {
        return "Fevrier";
    }
    if ($mon == "03") {
        return "Mars";
    }
    if ($mon == "04") {
        return "Avril";
    }
    if ($mon == "05") {
        return "Mai";
    }
    if ($mon == "06") {
        return "Juin";
    }
    if ($mon == "07") {
        return "Juillet";
    }
    if ($mon == "08") {
        return "Aout";
    }
    if ($mon == "09") {
        return "Septembre";
    }
    if ($mon == "10") {
        return "Octobre";
    }
    if ($mon == "11") {
        return "Novembre";
    }
    if ($mon == "12") {
        return "Decembre";
    }
}
?>

<html>
    <body>
        <?php require_once 'header.php'; ?>
        <main>

            <?php #afficher uniquement pour l'admin (pour v2 afficher proposer un evénement)  ?>
            <div class=" container">
                <a class="plus" href="event_creat.php"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter un evenement</a>
            </div>
            


            <?php /* Pour repeter autant d'event qu'il y a d'event 
              <div onclick="changeVisu(this, 'container event-list-click', 'container event-list');" class="container event-list">
              <div class="col-md-11">
              <h4><b><?php echo "Nom de l'evenement"; ?></b></h4>
              <span>
              <b>Date de l'evenement : </b><?php print(whodate("04-09-2016")); ?><br/>
              <b>Date limite d'inscriptions: </b><?php print(whodate("29-09-2016")); ?><br/>
              <b>Lieux: </b><?php echo 'palce de ttintin'; ?>
              </span>
              <p>
              <b>Description : </b><?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dignissim vitae mauris a lacinia. Quisque ut euismod erat, quis pulvinar mi. Etiam ullamcorper varius metus, vel elementum orci semper sed. Maecenas justo ipsum, congue eu ex non, convallis finibus eros. Integer sed sollicitudin neque. Sed eget facilisis ligula. Proin vitae nunc quis tellus rhoncus tempus non sit amet dolor. Etiam aliquet vel urna id sagittis. Nunc massa ligula, elementum eu rhoncus pretium, euismod eu urna.'; ?><br/>
              <b><?php echo 'Tarif : 68€'; ?></b>
              </p>
              </div>
              <div class="col-md-1">
              <?php #afficher les 2 en desous si admin seulement ?>
              <a class="gear col-md-4" href="index.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
              <?php #afficher '+' si user inscrit a l'event sinon afficher '-' ?>
              <a class="minus col-md-4" href="index.php"><i class="fa fa-minus" aria-hidden="true"></i></a>
              <a class="plus col-md-4" href="index.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
              </div>
              </div>

             */ ?>



            <?php
            $rsql_event = 'SELECT * FROM event';
            foreach ($bdd->query($rsql_event) as $row) {
                ?>

                <div onclick="changeVisu(this, 'container event-list-click', 'container event-list');" class="container event-list">
                    <div class="col-md-11">
                        <h4><b><?php echo($row[1]); ?></b></h4>
                        <span>
                            <b>Date de l'evenement : </b><?php echo(whodate($row[3])); ?><br/>
                            <?php
                            if ($row[4] != null) {
                                print("<b>Date de fin de l'evenement : </b>" . whodate($row[4]));
                            } else {
                                
                            }
                            ?>
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
        <?php include './footer.php'; ?>
    </body>
</html>

<script type="text/javascript">
    function changeVisu(elem, c1, c2)
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






