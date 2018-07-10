<?php
	include("db-connection.php");

		$crn=$_POST["crn"];
		$y=$_POST["y-qty"];
		$yunit=$_POST["y-qty-unit"];
		$ep=$_POST["exp_price"];
		$epunit=$_POST["exp_price-unit"];
		$org=$_POST["org"];

		$q = "INSERT INTO vegetables(farmer_id,crop_id,crop_name,category,yield_qty,yield_qty_unit,exp_orice,exp_price_unit,organic) VALUES ('$crn','$y',   '$yunit','$ep','$epunit','$org')";


?>