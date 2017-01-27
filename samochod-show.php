<?php include "header.php" ?>
<?php include "connection.php" ?>
<title> Samochody </title>
<style>
.table{ font-size:65%;}
</style>

<div class="container-fluid">
    <h3> Samochody </h3> 
            <?php

                mysql_connect($url,$username,$password);
                @mysql_select_db($database) or die( "Unable to select database");
                $query="SELECT * FROM `samochody`";
                $result = mysql_query($query);
                if (!$result) {
                    die("Query to show fields from table failed");
                } 
                $num = mysql_num_rows($result);
                mysql_close();
            ?>

                <table class="table table-hover table-condensed">
                    <tr>
                        <th> # </th> 
						<th> Numer rejestracyjny</th>
                        <th> Marka</th>
                        <th> Model</th> 
                        <th> Rok produkcji</th>
                        <th> Pojemność <cm3)</th> 
                        <th> Paliwo</th> 
                        <th> Moc (KM)</th> 
                        <th> Cena (Pln)</th> 
                        <th> Komentarz </th>
						<th> Wypożyczony </th>
						<th></th>
						<th></th>
                     </tr>
                <?php
                for ($i = 0; $i < $num; $i++) {
					$f9  = mysql_result($result,$i,"nr_rejestracyjny");
                    $f1  = mysql_result($result,$i,"marka");
                    $f2  = mysql_result($result,$i,"model");
                    $f3  = mysql_result($result,$i,"rok");
                    $f4  = mysql_result($result,$i,"pojemnosc");
                    $f5  = mysql_result($result,$i,"paliwo");
                    $f6  = mysql_result($result,$i,"moc");
                    $f7  = mysql_result($result,$i,"cena");
                    $f8  = mysql_result($result,$i,"komentarz");
                    $f10  = mysql_result($result,$i,"wypozyczenie");
                              
                ?>
                
                <tr>
                    
					<td> <?php echo $i+1; ?> </td>
					<td> <?php echo $f9;  ?> </td>
                    <td> <?php echo $f1;  ?> </td>
                    <td> <?php echo $f2;  ?> </td>
                    <td> <?php echo $f3;  ?> </td>
                    <td> <?php echo $f4;  ?> </td>
                    <td> <?php echo $f5;  ?> </td>
                    <td> <?php echo $f6;  ?> </td>
                    <td> <?php echo $f7;  ?> </td>
                    <td> <?php echo $f8;  ?> </td>
					<td> <?php echo $f10;  ?> </td>
					<td> <form role="form" action="edit_auto.php" method="post">
								<input type="hidden" name="nr_auta" value="<?php echo $f9;  ?>"> 
								<button type="submit" class="btn btn-default">Edytuj</button>
						</form> </td>
					<td> <form role="form" action="delete_auto.php" method="post">
								<input type="hidden" name="nr_auta" value="<?php echo $f9;  ?>"> 
								<button type="submit" class="btn btn-default"><img src="src/edit_delete.png" /></button>
						</form> </td>
                </tr>            
                </tr>
                <?php 
                } ?>
                </table>
</div>
<?php include "footer.php" ?>   
