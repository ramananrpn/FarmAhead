<?php
session_start();
include("db-connection.php");

$_SESSION['1flag']=0;
$email=$_POST["email"];
$password=$_POST["pass"];

$sel = "SELECT * FROM consumer_signup WHERE email='$email' AND password='$password'";

$run = mysqli_query($conn,$sel);

if(mysqli_num_rows($run)>0)
{
	$_SESSION['lflag']=1;
	$row = mysqli_fetch_array($run);
	$_SESSION['c_id']=$row['cons_id'];
	$_SESSION['c_un'] = $row['username'];
	$_SESSION['c_ph'] = $row['phone'];
	
	header("location:../Consumer/index.php");
}
else
{
	echo "Incorrect ph/ pass";
}

?>