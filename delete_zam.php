
<?php include "connection.php" ?>

<title> Delete </title>

<?php
$f1  = $_POST['nr_zam'];

$sql=mysql_query("DELETE FROM zamowienie WHERE id_zamowienia='$f1'");
     
	 if ($sql) {
        echo '<p>Rekord zosta� usun�ty z bazy</p>';
		header('Refresh: 1; url= ./production-report-show.php');
    } else {
        echo mysql_error(); echo '<p>B��d! Spr�buj ponownie</p>';
    }
    
    mysql_close($con);
?>