<?php 
try {
    $bdd = new PDO("mysql:host=localhost;dbname=projet_delta","root","");
} catch (Exception $ex) { 
    print "ERROR !: " . $ex->getMessage() . "<br/>";}
?>
