<?php include "header.php" ?>
<?php include "connection.php" ?>
<title> Podgląd zamówień </title>
<style>
.table{ font-size:70%;
</style>

<div class="container-fluid">
    <h3> Podgląd zamówień </h3> 
            <?php

                mysql_connect($url,$username,$password);
                @mysql_select_db($database) or die( "Unable to select database");
                $query="SELECT * FROM `zamowienie` INNER JOIN `zaplata` ON zaplata.id_zaplaty=zamowienie.id_zaplaty INNER JOIN `samochody` ON samochody.nr_rejestracyjny=zamowienie.nr_rejestracyjny INNER JOIN `klienci` ON klienci.id_klienta=zamowienie.id_klienta ";
                $result = mysql_query($query);
                if (!$result) {
                    die("Query to show fields from table failed");
					
                } 
				
                $num = mysql_numrows($result);
                mysql_close();
            ?>

                <table class="table table-hover table-condensed">
                    <tr> 
                        <th> # </th>
                        <th> ID zamowienia</th>
                        <th> Imie</th> 
                        <th> Nazwisko</th>
						<th> Nr Samochodu</th> 
						<th> Model</th>
						<th> Marka</th>
						<th> Do zapłaty (PLN)</th>
                        <th> Sposób zapłaty</th> 
                        <th> Data wyporzyczenia</th> 
                        <th> Data oddania</th> 
                        <th> </th>
						<th> </th>
                    </tr>
                <?php
                for ($i = 0; $i < $num; $i++) {
                    $f1  = mysql_result($result,$i,"id_zamowienia");
                    $f3  = mysql_result($result,$i,"imie");
                    $f4  = mysql_result($result,$i,"nazwisko");
					$f5  = mysql_result($result,$i,"nr_rejestracyjny");
					$f6  = mysql_result($result,$i,"marka");
					$f7  = mysql_result($result,$i,"model");
					$f11  = mysql_result($result,$i,"count_cena");
                    $f8  = mysql_result($result,$i,"typ");
					$f9  = mysql_result($result,$i,"data_start");
                    $f10  = mysql_result($result,$i,"data_koniec");
                    
				
                   // $f7 = mysql_result($result,$i,"comments");  
                              
                ?>
                
                <tr>
                    <td> <?php echo $i+1; ?> </td>
                    <td> <?php echo $f1;  ?> </td>
                    <td> <?php echo $f3;  ?> </td>
                    <td> <?php echo $f4;  ?> </td>
                    <td> <?php echo $f5;  ?> </td>
                    <td> <?php echo $f6;  ?> </td>
                    <td> <?php echo $f7;  ?> </td>
					<td> <?php echo $f11;  ?> </td>
					<td> <?php echo $f8;  ?> </td>
                    <td> <?php echo $f9;  ?> </td>
                    <td> <?php echo $f10;  ?> </td>
					<td> <form role="form" action="podglad_zam.php" method="post">
								<input type="hidden" name="nr_zam" value="<?php echo $f1;  ?>"> 
								<button type="submit" class="btn btn-default">Podglad</button>
						</form> </td>
					<td> <form role="form" action="delete_zam.php" method="post">
								<input type="hidden" name="nr_zam" value="<?php echo $f1;  ?>"> 
								<button type="submit" class="btn btn-default"><img src="src/edit_delete.png" /></button>
						</form> </td>
                </tr>
                <?php 
                } ?>
                </table>
</div>
<?php include "footer.php" ?>   
