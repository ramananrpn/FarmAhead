<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"]))
{
	include("db-connection.php");
	$query="SELECT * from requestcrop";
	$result=mysqli_query($conn,$query);
	$rows=mysqli_num_rows($result);
	$d=000;
	$id=$d+$rows;
	$reqid="REQ-".++$id;  
	$name=$_POST["reqsugar"];
	$sel="SELECT ctg_id FROM category WHERE category='Sugarcane'";
	$res=mysqli_query($conn,$sel);
	$row=mysqli_fetch_assoc($res);
	$sql="INSERT INTO `requestcrop`(`req_id`, `ctg_id`, `category`, `req_crop`) VALUES ('".$reqid."','".$row['ctg_id']."','Sugarcane','".$name."')";
	if(mysqli_query($conn,$sql))
	{
	echo '<script type="text/javascript">
	alert("Successfully Added");
	</script>';
	}
	
}
?>