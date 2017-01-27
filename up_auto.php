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
$var10  = $_POST['wypozyczenie'];

$sql=mysql_query("UPDATE samochody SET `marka`='$var2', `model`='$var3', `rok`='$var4', `pojemnosc`='$var5', `paliwo`='$var6', `moc`='$var7', `cena`='$var8', `komentarz`='$var9', `wypozyczenie`='$var10' WHERE nr_rejestracyjny='$var1'");

echo $var1;
echo $var6;
echo $var10;

    if ($sql) {
        echo '<p>Zaktualizowano bazę danych</p>';
		header('Refresh: 1; url= ./samochod-show.php');
    } else {
        echo mysql_error(); echo '<p>Błąd! Spróbuj ponownie</p>';
    }

mysql_close($con);

?>