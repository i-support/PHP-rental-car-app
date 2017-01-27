<?php
include "connection.php";
 
$var1  = $_POST['nazwisko'];
$var2  = $_POST['imie'];
$var3  = $_POST['pesel'];
$var4  = $_POST['miasto'];
$var5  = $_POST['ulica'];
$var6  = $_POST['kod_pocztowy'];
$var7  = $_POST['telefon'];
$var8  = $_POST['komentarz'];

$sql=mysql_query("INSERT INTO klienci (`nazwisko`, `imie`, `pesel`, `miasto`, `ulica`, `kod_pocztowy`, `telefon`, `komentarz` ) 
VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7', '$var8')");


    if ($sql) {
        echo '<p>Dodano do bazy</p>';
		header('Refresh: 1; url= ./production-report.php');
    } else {
        echo mysql_error(); echo '<p>Błąd! Spróbuj ponownie</p>';
    }


mysql_close($con);
?>

