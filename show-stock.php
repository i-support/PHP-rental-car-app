<?php include "header.php" ?>
<?php include "connection.php" ?>
<title> Stock Inventory </title>

<div class="container-fluid">
    <h3> Stock </h3> 
            <?php

                mysql_connect($url,$username,$password);
                @mysql_select_db($database) or die( "Unable to select database");
                $query="SELECT * FROM Stock";
                $result=mysql_query($query);
                if (!$result) {
                    die("Query to show fields from table failed");
                } 
                $num = mysql_numrows($result);
                mysql_close();
            ?>

                <table class="table table-hover">
                    <tr> <td> Name </td>
                        <td> Amount </td>
                        <td> Date Added  </td>
                        <td> Length </td>
                        <td> Width </td>
                        <td> Height </td>
                        <td> Diameter </td>
                    </tr>
                <?php
                
                for ( $i=0; $i < $num; $i++) {
                    $f1 = mysql_result($result,$i,"Name");
                    $f2 = mysql_result($result,$i,"Amount");
                    $f3 = mysql_result($result,$i,"Date");
                    $f4 = mysql_result($result,$i,"Length");
                    $f5 = mysql_result($result,$i,"Width");
                    $f6 = mysql_result($result,$i,"Height");
                    $f7 = mysql_result($result,$i,"Diameter");
                ?>
                <tr>
                    <td> <?php echo $f1; ?> </td>
                    <td> <?php echo $f2; ?> </td>
                    <td> <?php echo $f3; ?> </td>
                    <td> <?php echo $f4; ?> </td>
                    <td> <?php echo $f5; ?> </td>
                    <td> <?php echo $f6; ?> </td>
                    <td> <?php echo $f7; ?> </td>
                </tr>
                <?php 
                } ?>
</div>
<?php include "footer.php" ?>   
