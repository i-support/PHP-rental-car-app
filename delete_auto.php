<?php include "connection.php" ?>

<title> Delete </title>

<?php
$f1  = $_POST['nr_auta'];


$sql=mysql_query("DELETE FROM samochody WHERE nr_rejestracyjny='$f1'");
     
	 if ($sql) {
        echo '<p>Rekord został usunęty z bazy</p>';
		header('Refresh: 1; url= ./samochod-show.php');
    } else {
        echo mysql_error(); echo '<p>Błąd! Spróbuj ponownie</p>';
    }
    
    mysql_close($con);

	?>