<?php

include("db-connection.php");

session_start();
$_SESSION['lflag']=0;

$phone=$_POST["uid"];
$password=$_POST["pass"];

$sel = "SELECT * FROM f_signup WHERE phone='$phone' AND pin='$password'";

$run = mysqli_query($conn,$sel);

if(mysqli_num_rows($run)>0)
{
	//while ($row = mysqli_fetch_assoc($run))
	$_SESSION['lflag']=1;
	{

		$row = mysqli_fetch_array($run);
		$_SESSION['un'] = $row['first_name'];
		$_SESSION['ph'] = $row['phone'];
		$_SESSION['f_id'] = $row['farmer_id'];
		//echo $_SESSION['un'];
	}
	//$_SESSION['first_name'];

	//if(!isset($_SESSION['first_name']))
	//{
	//	echo "error";
	//	}

	header("location:../New-Farmer/index.php");
}
else
{
	echo "Incorrect ph/ pass";
}

?>