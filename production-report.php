<?php include "header.php" ?>
<?php include "connection.php" ?>
<head>
  <link rel="stylesheet" type="text/css" href="./js/dhtmlxcalendar.css"/>
  <script src="./js/dhtmlxcalendar.js"></script>
 <script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["calendar","calendar2","calendar3"]);
		}
	</script>
<title> Dodaj zamowienie </title>
	</head>

<body onload="doOnLoad();">
<div class="container">
    <h3> Dodaj zamowienie </h3> 
    <form role="form" action="zam-podsumowanie.php" method="post">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label> Klient </label>
                <select class="form-control" tabindex="1" data-placeholder="id_klienta" data-rule-required="true" name="id_klienta" >
                    <?php  
                        
                        mysql_connect(localhost,$username,$password);

                        @mysql_select_db($database) or die( "Unable to select database");
                        $query= "SELECT * FROM klienci ORDER BY id_klienta DESC ";
                       $result = mysql_query($query);
                        for($i=0; $row = mysql_fetch_array($result); $i++) { 
                            $x = $row["imie"]; 
							$y = $row["nazwisko"];
							$z = $row["id_klienta"];
						?>
						
                        <option value="<?php echo $z; ?>" >  <?php echo $x," ", $y; ?> </option>
						
                        <?php }
                         
						 ?>
						
                </select>
				<label> Samochód </label>
                <select class="form-control" tabindex="1" data-placeholder="nr_rejestracyjny" data-rule-required="true" name="nr_rejestracyjny">
                    <?php  
                        
                        mysql_connect(localhost,$username,$password);

                        @mysql_select_db($database) or die( "Unable to select database");
                        $query= "SELECT * FROM `samochody` WHERE `wypozyczenie` = 'Nie' ORDER BY nr_rejestracyjny ASC";
                       $result = mysql_query($query);
                        for($i=0; $row = mysql_fetch_array($result); $i++) { 
                            $x = $row["nr_rejestracyjny"]; 
							$y = $row["marka"];
							$z = $row["model"];
							$z = $row["cena"];
						?>
					
                        <option value="<?php echo $x; ?>" >  <?php echo $x," ", $y," "; ?> </option>
						
                       <?php }
                         ?> 
						
                </select>
								
				<label> Sposób zapłaty </label>
                <select class="form-control" tabindex="1" data-placeholder="zaplata" data-rule-required="true" name="zaplata">
                    <?php  
                        
                        mysql_connect(localhost,$username,$password);

                        @mysql_select_db($database) or die( "Unable to select database");
                        $query= "SELECT * FROM zaplata ORDER BY id_zaplaty ASC ";
                       $result = mysql_query($query);
                        for($i=0; $row = mysql_fetch_array($result); $i++) { 
                            $x = $row["id_zaplaty"]; 
							$y = $row["typ"];
							
						?>
					
                        <option value="<?php echo $x; ?>" >  <?php echo  $y; ?> </option>
						
                        <?php }
                         ?>
						
                </select>
            </div> 
           
            
        </div> <!-- /col -->
        <div class="col-md-4">
             <div class="form-group">
                <label> Data</label>
               	<input name="data" type="text" class="form-control" id="calendar" value="<?php echo date("Y-m-d") ?>">
			</div>
        
            <div class="form-group">
                <label> Date rozpoczęcia</label>
                <input name="data_start" type="text" class="form-control" id="calendar3" value="<?php echo date("Y-m-d") ?>">
            </div>
            <div class="form-group">
                <label> Data oddania</label>
                <input name="data_koniec" type="text" class="form-control" id="calendar2" value="<?php $d=strtotime("tomorrow"); echo date("Y-m-d", $d) ?>">
            </div>
        </div> <!-- /col -->
        
                </div> <!-- /row --> 
            </div>
            
                
  
    <button type="submit" class="btn btn-default">Podsumowanie</button>
    </form>
</div> <!-- end of body --> 

<?php include "footer.php" ?>
</body>
