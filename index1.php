<?php include "header.php" ?>
<?php include "connection.php" ?>

<title> Strona główna </title>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div class="form-group">
				<div class="table-responsive">
	<H3>Wypożyczone samochody </H3>
<?php
				 mysql_connect($url,$username,$password);
                @mysql_select_db($database) or die( "Unable to select database");
                $query="SELECT * FROM `samochody` WHERE wypozyczenie = 'Tak' ";
                $result = mysql_query($query);
                if (!$result) {
                    die("Query to show fields from table failed");
                } 
                $num = mysql_numrows($result);
                mysql_close();
            ?>

                <table class="table">
                    <tr>
						<th> Numer rejestracyjny </th> 
                        <th> Marka</th>
                        <th> Model</th> 
                        
                     </tr>
                <?php
                for ($i = 0; $i < $num; $i++) {
                    $f1  = mysql_result($result,$i,"nr_rejestracyjny");
                    $f2  = mysql_result($result,$i,"marka");
                    $f3  = mysql_result($result,$i,"model");
                    
                    
                ?>
                
                <tr>
                    <td> <?php echo $f1;  ?> </td>
                    <td> <?php echo $f2;  ?> </td>
                    <td> <?php echo $f3;  ?> </td>
                    
                </tr>
                <?php 
                } ?>
                </table>
				</div>
			</div>
		</div>	
	
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
			<h3>Szybkie linki</h3>
			<a type="button" href="production-report.php" class="btn btn-success">Stwórz zamówienie istniejący klient</a></br></br>
			<a type="button" href="work-order.php" class="btn btn-info">Stwórz zamówienie nowy klient</a></br></br>
			<a type="button" href="samochod.php" class="btn btn-default">Dodaj samochód</a>
				</div>
			</div>
		</div>
	</div>		
</div>
</br>
<?php include "footer.php" ?>