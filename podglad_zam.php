<?php include "header.php" ?>
<?php include "connection.php" ?>

<title> Szczegóły zamowienia </title>

<div class="container">
    <h3> Szczegóły zamowienia </h3> 
    
	<div class="row">
        <div class="col-md-4">
			<div class="form-group">
				<label>Klient </label>
				<?php
				 mysql_connect(localhost,$username,$password);
						$f1  = $_POST['nr_zam'];
                        @mysql_select_db($database) or die( "Unable to select database");
                        $query="SELECT * FROM  `zamowienie`  INNER JOIN `zaplata` ON zaplata.id_zaplaty=zamowienie.id_zaplaty INNER JOIN `samochody` ON samochody.nr_rejestracyjny=zamowienie.nr_rejestracyjny INNER JOIN `klienci` ON klienci.id_klienta=zamowienie.id_klienta WHERE zamowienie.id_zamowienia = '$f1'";
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
							echo "<br>". $e. " ". $f. " ". $d;
							echo "<br>Pesel: ". $c;
							echo "<br>Telefon: ". $g;
							echo "<br>komentarz:<br>". $h;
						}
				?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			<label>Samochód </label>
		<?php
		                $result = mysql_query($query);		
						for($a=0; $row1 = mysql_fetch_array($result); $a++) { 
                            $a = $row1["nr_rejestracyjny"]; 
							$b = $row1["marka"]; 
							$c = $row1["model"]; 
							$d = $row1["rok"];
							$e = $row1["pojemnosc"];
							$f = $row1["paliwo"]; 
							$g = $row1["moc"];
							$h = $row1["komentarz"];
							$i = $row1["cena"];
							echo "<br>". $a. " ". $b. " ". $c;
							echo "<br>Rok produkcji: ". $d;
							echo "<br>". $e. " cm3 ". $f. " ". $g. " KM ";
							echo "<br>komentarz: <br>". $h;
							echo "<br><b>Koszt wynajmu: </b><br>". $i. " PLN";
							$var8 = $i;
						}
		?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			<label>Szczegóły </label>
		<?php
						$result = mysql_query($query);
                        for($i=0; $row = mysql_fetch_array($result); $i++) { 
                            $a = $row["typ"];
							$b = $row["data_start"];
							$c = $row["data_koniec"];
							echo "<br> Sposob zaplaty: ". $a;
								
							echo "<br>Data wyporzyczenia: ". $b ;
							echo "<br>Data oddania: ". $c ;
							}
		?>
			</div>
		</div>	
	</div>
</div>	















<?php include "footer.php" ?>   