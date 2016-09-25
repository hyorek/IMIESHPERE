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


function secure($data) {
	$data = htmlspecialchars($data);
	$data = mysql_real_escape_string($data);
	return $data;
}




?>
