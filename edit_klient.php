<?php include "header.php" ?>
<?php include "connection.php" ?>

<title> Edycja klienta </title>

<div class="container">
<h3> Edycja klienta</h3> 
<div class="row">
        <div class="col-md-4">
		<div class="form-group">
<?php
$f9  = $_POST['nr_klient'];
 mysql_connect($url,$username,$password);
                @mysql_select_db($database) or die( "Unable to select database");
                $query="SELECT * FROM  `klienci` WHERE id_klienta = '$f9'";
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
        echo '<form action="up_klient.php" method="post">
        <input type="hidden" name="id_klienta" value="'.$f9.'" />
        <label> Imię</label><br />
        <input type="text" name="imie"
        value="'.$r['imie'].'" /><br />
        <label> Nazwisko</label><br />
        <input type="text" name="nazwisko"
        value="'.$r['nazwisko'].'" /><br />
		<label> Pesel</label><br />
		<input type="text" name="pesel"
        value="'.$r['pesel'].'" /><br />
		<label> Miasto</label><br />
		<input type="text" name="miasto"
        value="'.$r['miasto'].'" /><br />
		<label> Ulica</label><br />
		 <input type="text" name="ulica"
        value="'.$r['ulica'].'" /><br />
		<label> Kod pocztowy</label><br />
		 <input type="text" name="kod_pocztowy"
        value="'.$r['kod_pocztowy'].'" /><br />
		<label> Telefon</label><br />
		 <input type="text" name="telefon"
        value="'.$r['telefon'].'" /><br />
		<label> Komentarz</label><br />
		 <input type="text" name="komentarz"
        value="'.$r['komentarz'].'" /><br />
        <input type="submit" value="Popraw" />
        </form>';
    } 
?>
</div>
</div>
</div>
</div>












<?php include "footer.php" ?>   