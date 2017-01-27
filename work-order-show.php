<?php include "header.php" ?>
<?php include "connection.php" ?>
<title> Klienci </title>
<style>
.table{ font-size:65%;}
</style>

<div class="container-fluid">
    <h3> Klienci </h3> 
            <?php

                mysql_connect($url,$username,$password);
                @mysql_select_db($database) or die( "Unable to select database");
                $query="SELECT * FROM `klienci`";
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
						<th> ID Klienta</th>
                        <th> Nazwisko</th>
                        <th> Imie</th> 
                        <th> Pesel</th> 
                        <th> Miasto</th> 
                        <th> Ulica</th> 
                        <th> Kod pocztowy</th> 
                        <th> Telefon</th> 
                        <th> Komentarz </th>
						<th></th>
						<th></th>
                     </tr>
                <?php
                for ($i = 0; $i < $num; $i++) {
					$f9  = mysql_result($result,$i,"id_klienta");
                    $f1  = mysql_result($result,$i,"nazwisko");
                    $f2  = mysql_result($result,$i,"imie");
                    $f3  = mysql_result($result,$i,"pesel");
                    $f4  = mysql_result($result,$i,"miasto");
                    $f5  = mysql_result($result,$i,"ulica");
                    $f6  = mysql_result($result,$i,"kod_pocztowy");
                    $f7  = mysql_result($result,$i,"telefon");
                    $f8  = mysql_result($result,$i,"Komentarz");
                    
                              
                ?>
                
                <tr>
                    
					<td> <?php echo $i+1; ?> </td>
					<td> <?php  $f9;  ?> </td>
                    <td> <?php echo $f1;  ?> </td>
                    <td> <?php echo $f2;  ?> </td>
                    <td> <?php echo $f3;  ?> </td>
                    <td> <?php echo $f4;  ?> </td>
                    <td> <?php echo $f5;  ?> </td>
                    <td> <?php echo $f6;  ?> </td>
                    <td> <?php echo $f7;  ?> </td>
                    <td> <?php echo $f8;  ?> </td>
					<td> <form role="form" action="edit_klient.php" method="post">
								<input type="hidden" name="nr_klient" value="<?php echo $f9;  ?>"> 
								<button type="submit" class="btn btn-default">Edytuj</button>
						</form> </td>
					<td> <form role="form" action="delete_klient.php" method="post">
								<input type="hidden" name="nr_klient" value="<?php echo $f9;  ?>"> 
								<button type="submit" class="btn btn-default"><img src="src/edit_delete.png" /></button>
						</form> </td>
                </tr>            
                </tr>
                <?php 
                } ?>
                </table>
</div>
<?php include "footer.php" ?>   
