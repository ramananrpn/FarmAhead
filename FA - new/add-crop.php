<?php

include("db-connection.php");
session_start();

$crop_d=$_POST["crop"];
$catgy_d=$_POST["ctg"];
$qty_d=$_POST["y-qty"];
$y_type_d=$_POST["y-qty-unit"];
$exp_price_d=$_POST["exp-price"];
$exp_qty_d=$_POST["exp-price-qty"];
$org_d=$_POST["org"];
$phn_d=$_SESSION['ph'];

$s = "INSERT INTO update_crop(phone,crop_name,category,yield_qty,yield_qty_unit,exp_price,exp_price_unit,organic,crop_id) VALUES ('$phn_d','$crop_d','$catgy_d','$qty_d','$y_type_d','$exp_price_d','$exp_qty_d','$org_d')";

if($conn->query($s)===TRUE)
{
	echo "Successfully added";
	//header("location:index.html");
}
else
{
	echo "ERROR";
}

?>