<?php include "connection.php" ?>

<title> Delete </title>

<?php
$f9  = $_POST['nr_klient'];

$sql=mysql_query("DELETE FROM klienci WHERE id_klienta='$f9'");
     
	 if ($sql) {
        echo '<p>Rekord został usunęty z bazy</p>';
		header('Refresh: 1; url= ./work-order-show.php');
    } else {
        echo mysql_error(); echo '<p>Błąd! Spróbuj ponownie</p>';
    }
    
    mysql_close($con);
?>