<?php
include "connection.php";


// escape variables for security
$var1 = mysqli_real_escape_string($con, $_POST['stock-name']);
$var2 = mysqli_real_escape_string($con, $_POST['stock-amount']);
$var3 = mysqli_real_escape_string($con, $_POST['stock-length']);
$var4 = mysqli_real_escape_string($con, $_POST['stock-width']);
$var5 = mysqli_real_escape_string($con, $_POST['stock-height']);
$var6 = mysqli_real_escape_string($con, $_POST['stock-diameter']);
$var7 = mysqli_real_escape_string($con, $_POST['stock-date']);

$sql="INSERT INTO Stock (Name, Amount, Length, Width, Height, Diameter, Date)
VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7' )";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Stock Added";

mysqli_close($con);
?>

