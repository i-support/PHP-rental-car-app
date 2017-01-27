<?php
include "header.php";
include "connection.php";

$var1  = $_POST['id_klienta'];
$var2  = $_POST['nr_rejestracyjny'];
$var3  = $_POST['zaplata'];
$var4  = $_POST['data'];
$var5  = $_POST['data_start'];
$var6  = $_POST['data_koniec'];
$var7  = $_POST['data_koniec'];
$var8  = 0;
?>
<title> Home </title> 
 <body>
 <div class="container">
    <h3> Podsumowanie zamowienia </h3> 
    
	<div class="row">
        <div class="col-md-4">
			<div class="form-group">
				<label>Klient </label>
				<?php
				 mysql_connect(localhost,$username,$password);

                        @mysql_select_db($database) or die( "Unable to select database");
                        $query= "SELECT * FROM klienci where id_klienta =$var1 ";
                       $result = mysql_query($query);
                        for($i=0; $row = mysql_fetch_array($result); $i++) { 
                            $a = $row["imie"]; 
							$b = $row["nazwisko"]; 
							$c = $row["pesel"]; 
							$d = $row["miasto"];
							$e = $row["ulica"];
							$f = $row["kod_pocztowy"]; 
							$g = $row["telefon"];
							$h = $row["komentarz"];
							echo "<br>". $a. " ". $b;
							echo "<br>Pesel: ". $c;
							echo "<br>". $e. " ". $f. " ". $d;
							echo "<br>Telefon: ". $g;
							echo "<br>komentarz:<br>". $h;
						}
				?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Samochod</label>
				<?php
				 mysql_connect(localhost,$username,$password);

                        @mysql_select_db($database) or die( "Unable to select database");
                        $query= "SELECT * FROM samochody WHERE nr_rejestracyjny ='$var2' ";
                        $result = mysql_query($query);
                        for($i=0; $row = mysql_fetch_array($result); $i++) { 
                            $a = $row["nr_rejestracyjny"]; 
							$b = $row["marka"]; 
							$c = $row["model"]; 
							$d = $row["rok"];
							$e = $row["pojemnosc"];
							$f = $row["paliwo"]; 
							$g = $row["moc"];
							$h = $row["komentarz"];
							$i = $row["cena"];
							echo "<br>". $a. " ". $b. " ". $c;
							echo "<br>Rok produkcji: ". $d;
							echo "<br>". $e. " cm3 ". $f. " ". $g. " KM ";
							echo "<br>komentarz: <br>". $h;
							echo "<br><b>Koszt wynajmu: </b><br>". $i;
							$var8 = $i;
						}
				 				?>
			</div>
		</div>
		<div class="col-md-4">
			 <div class="form-group">
				<label>Szczegoly</label>
				<?php
				  mysql_connect(localhost,$username,$password);

                        @mysql_select_db($database) or die( "Unable to select database");
                        $query= "SELECT * FROM zaplata WHERE id_zaplaty ='$var3' ";
                        $result = mysql_query($query);
                        for($i=0; $row = mysql_fetch_array($result); $i++) { 
                            $a = $row["typ"]; 
							echo "<br> Sposob zaplaty: ". $a;
								}
							echo "<br>Data wyporzyczenia: ". $data_start ;
							echo "<br>Data oddania: ". $data_koniec ;
				?>
			 </div>
		</div>
	</div>
</div>
<?php	

	
	$sql=mysql_query("INSERT INTO `zamowienie` (`id_klienta`, `id_zaplaty`, `data_start`, `data_koniec`, `nr_rejestracyjny`, `count_cena`) 
VALUES ('$var1', '$var3', '$var5', '$var6', '$var2', '$var8')");

	$sql1=mysql_query("UPDATE `samochody` SET `wypozyczenie`= 'Tak' WHERE `nr_rejestracyjny` = '$var2'");


if ($sql) {
        echo '<p>Dodano do bazy</p>';
		    } else {
        echo mysql_error(); echo '<p>Błąd! Spróbuj ponownie</p>';
    }

	if ($sql1) {
        echo '<p>Uaktualniono baze</p>';
		    } else {
        echo mysql_error(); echo '<p>Błąd! Spróbuj ponownie</p>';
    }

mysql_close($con);
	
?>	   
   

 </body>
