<?php
include "connection.php";
 
 
$var1  = $_POST['id_klienta'];
$var2  = $_POST['nazwisko'];
$var3  = $_POST['imie'];
$var4  = $_POST['pesel'];
$var5  = $_POST['miasto'];
$var6  = $_POST['ulica'];
$var7  = $_POST['kod_pocztowy'];
$var8  = $_POST['telefon'];
$var9  = $_POST['komentarz'];



$sql=mysql_query("UPDATE klienci SET`nazwisko`='$var2', `imie`='$var3', `pesel`='$var4', `miasto`='$var5', `ulica`='$var6', `kod_pocztowy`='$var7', `telefon`='$var8', `komentarz`='$var9' WHERE id_klienta='$var1'");


    if ($sql) {
        echo '<p>Zaktualizowano bazę danych</p>';
		header('Refresh: 1; url= ./work-order-show.php');
    } else {
        echo mysql_error(); echo '<p>Błąd! Spróbuj ponownie</p>';
    }


mysql_close($con);

?>