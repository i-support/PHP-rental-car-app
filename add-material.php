<?php
include "connection.php";
 

// escape variables for security
$var1 = mysqli_real_escape_string($con, $_POST['material-name']);
$var2 = mysqli_real_escape_string($con, $_POST['material-amount']);
$var3 = mysqli_real_escape_string($con, $_POST['material-date']);
$var3 = mysqli_real_escape_string($con, $_POST['material-provider']);

$sql="INSERT INTO Material (Name, Amount, Date, Provider)
VALUES ('$var1', '$var2', '$var3', '$var4')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Material Added";

mysqli_close($con);
?>

