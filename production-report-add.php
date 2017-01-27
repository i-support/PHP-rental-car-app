<?php
include "connection.php";
 
if (isset($_POST['reje'])){
	$sql="INSERT INTO zamowienie (`id_klienta`, `id_zaplaty`, `data_start`, `data_koniec`, `nr_rejestracyjny`) 
VALUES ('$var1', '$var3', '$var5', '$var6', '$var2')";


include "connection.php";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Work Order Completed";

mysqli_close($con);

/*
$var2  = mysqli_real_escape_string($con, $_POST['work-order-date']);
$var3  = mysqli_real_escape_string($con, $_POST['requested-by']);
$var4  = mysqli_real_escape_string($con, $_POST['item-code-number']);
$var5  = mysqli_real_escape_string($con, $_POST['material']);
$var6  = mysqli_real_escape_string($con, $_POST['shape']);
$var7  = mysqli_real_escape_string($con, $_POST['length']);
$var8  = mysqli_real_escape_string($con, $_POST['width']);
$var9  = mysqli_real_escape_string($con, $_POST['thickness-diameter']);
$var10 = mysqli_real_escape_string($con, $_POST['grid-rod-spec']);
$var11 = mysqli_real_escape_string($con, $_POST['grid-rod-n-a']);
$var12 = mysqli_real_escape_string($con, $_POST['plane-plate-spec']);
$var13 = mysqli_real_escape_string($con, $_POST['plane-plate-n-a']);
$var14 = mysqli_real_escape_string($con, $_POST['resin-trade-name-grade']);
$var15 = mysqli_real_escape_string($con, $_POST['resin-manufacturer']);
$var16 = mysqli_real_escape_string($con, $_POST['resin-color']);
$var17 = mysqli_real_escape_string($con, $_POST['customer']);
$var18 = mysqli_real_escape_string($con, $_POST['customer-po-number']);
$var19 = mysqli_real_escape_string($con, $_POST['promised-ship-date']);
$var20 = mysqli_real_escape_string($con, $_POST['weight']);
$var21 = mysqli_real_escape_string($con, $_POST['resin-quantity-pull']);
$var22 = mysqli_real_escape_string($con, $_POST['quanitity-to-make']);
$var23 = mysqli_real_escape_string($con, $_POST['resin-in-stock']);
$var24 = mysqli_real_escape_string($con, $_POST['resin-order-qp-po-number']);
$var25 = mysqli_real_escape_string($con, $_POST['resin-qp-po-issued-by']);
$var26 = mysqli_real_escape_string($con, $_POST['resin-expected-delivery-date']);
$var27 = mysqli_real_escape_string($con, $_POST['commments']);



$sql="INSERT INTO Material (`work-order-number`, `work-order-date`, `requested-by`, `item-code-number`, `material`, `shape`, `length`, `width`, `thickness-diameter`, `grid-rod-spec`, `grid-rod-n-a`, `plane-plate-spec`, `plane-plate-n-a`, `resin-trade-name-grade`, `resin-manufacturer`, `resin-color`, `customer`, `customer-po-number`, `promised-ship-date`, `weight`, `resin-quantity-pull`, `quantity-to-make`, `resin-in-stock`, `resin-order-qp-po-number`, `resin-qp-po-issued-by`, `resin-expected-delivery-date`, `comments`) 
VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7', '$var8', '$var9', '$var10', '$var11', '$var12', '$var13', '$var14', '$var15', '$var16', '$var17', '$var18', '$var19', '$var20', '$var21', '$var22', '$var23', '$var24', '$var25', '$var26', '$var27')";



if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Work Order Completed";

mysqli_close($con);
*/
?>

