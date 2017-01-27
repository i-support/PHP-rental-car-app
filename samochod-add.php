<?php
include "connection.php";
 
 
$var1  = $_POST['nr_rejestracyjny'];
$var2  = $_POST['marka'];
$var3  = $_POST['model'];
$var4  = $_POST['rok'];
$var5  = $_POST['pojemnosc'];
$var6  = $_POST['paliwo'];
$var7  = $_POST['moc'];
$var8  = $_POST['cena'];
$var9  = $_POST['komentarz'];


$sql=mysql_query("INSERT INTO samochody (`nr_rejestracyjny`, `marka`, `model`, `rok`, `pojemnosc`, `paliwo`, `moc`, `cena`, `komentarz`, `wypozyczenie` ) 
VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7', '$var8', '$var9', 'Nie')");


    if ($sql) {
        echo '<p>Dodano do bazy</p>';
		header('Refresh: 1; url= ./samochod-show.php');
    } else {
        echo mysql_error(); echo '<p>B³¹d! Spróbuj ponownie</p>';
    }


mysql_close($con);

?>

