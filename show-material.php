<?php include "header.php" ?>
<?php include "connection.php" ?>
<title> Raw Material Inventory </title>


<div class="container-fluid">
    <h3> Material </h3> 

            <?php
                mysql_connect($url,$username,$password);
                @mysql_select_db($database) or die( "Unable to select database");
                $query="SELECT * FROM Material";
                $result=mysql_query($query);
                $num=mysql_numrows($result);
                mysql_close();
            ?>

                <table class="table table-hover">
                    <tr> <td> Name </td>
                        <td> Amount </td>
                        <td> Date Added  </td>
                        <td> Provider </td>
                    </tr>
                <?php
                $i=0;
                while ($i < $num) {
                    $f1 = mysql_result($result,$i,"Name");
                    $f2 = mysql_result($result,$i,"Amount");
                    $f3 = mysql_result($result,$i,"Date");
                    $f4 = mysql_result($result,$i,"Provider");
                ?>
                <tr>
                    <td> <?php echo $f1; ?> </td>
                    <td> <?php echo $f2; ?> </td>
                    <td> <?php echo $f3; ?> </td>
                    <td> <?php echo $f4; ?> </td>
                </tr>
                <?php 
                $i++;} ?>
</div>
<?php include "footer.php" ?>   
        