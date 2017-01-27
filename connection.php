<?php
$servername = "localhost";
$username = "mgr";
$password = "";
$database = "mgr";

$con  = @mysql_connect($servername, $username, $password)
    or die('Brak połączenia z serwerem MySQL');
    $db = @mysql_select_db($database, $con)
    or die('Nie mogę połączyć się z bazą danych');
     
?>