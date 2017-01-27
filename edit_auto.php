<?php include "header.php" ?>
<?php include "connection.php" ?>

<title> Edycja samochodu </title>

<div class="container">
<h3> Edycja samochodu</h3> 
<div class="row">
        <div class="col-md-4">
		<div class="form-group">
<?php
$f9  = $_POST['nr_auta'];
 mysql_connect($url,$username,$password);
                @mysql_select_db($database) or die( "Unable to select database");
                $query="SELECT * FROM  `samochody` WHERE nr_rejestracyjny = '$f9'";
                $result = mysql_query($query);
                if (!$result) {
                    die("Query to show fields from table failed");
					
                } 
				
                $num = mysql_numrows($result);
                mysql_close();
				
				

 if(mysql_num_rows($result) > 0) {
         /* odczytujemy zawartość wiersza z tabeli */
        $r = mysql_fetch_assoc($result);
        /* wczytujemy dane do formularza */
        /* 
        w formularz znajdują się ukryte pola "a"
        z wartością "save" i pole "id" z wartością
        zmiennej id
        */
        echo '<form action="up_auto.php" method="post">
        
        <input type="hidden" name="nr_rejestracyjny" value="'.$f9.'" />
        <label> Marka</label><br />
        <input type="text" name="marka"
        value="'.$r['marka'].'" /><br />
		<label> Model</label><br />
		<input type="text" name="model"
        value="'.$r['model'].'" /><br />
		<label> Rok produkcji</label><br />
		<input type="text" name="rok"
        value="'.$r['rok'].'" /><br />
		<label> Pojemność cm3</label><br />
		 <input type="text" name="pojemnosc"
        value="'.$r['pojemnosc'].'" /><br />
		<label> Paliwo</label><br />
		 <select name="paliwo" >
					<option>Benzyna</option>
					<option>Diesel</option>
				</select><br />
		<label> Moc (KM)</label><br />
		 <input type="text" name="moc"
        value="'.$r['moc'].'" /><br />
		<label> Cena</label><br />
		 <input type="text" name="cena"
        value="'.$r['cena'].'" /><br />
		<label> Komentarz</label><br />
		 <input type="text" name="komentarz"
        value="'.$r['komentarz'].'" /><br />
		<label> Wypożyczenie</label><br />
		 <select name="wypozyczenie" >
					<option>Nie</option>
					<option>Tak</option>
		</select><br />
        <input type="submit" value="Popraw" />
        </form>';
    } 
?>
</div>
</div>
</div>
</div>












<?php include "footer.php" ?>   