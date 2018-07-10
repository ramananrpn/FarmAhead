<?php

session_start();
include("db-connection.php");
if(isset($_POST["reset"]))
{
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
$ccpass=$_POST["ccpass"];
$sel="SELECT password from `consumer_signup` where `cons_id`='".$_SESSION["c_id"]."'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res);
/*echo $row["password"];
echo $ccpass;*/
if($pass==$row["password"])
{
$query="UPDATE `consumer_signup` SET `password`='".$cpass."',`cpassword`='".$cpass."' where `cons_id`='".$_SESSION["c_id"]."'";
mysqli_query($conn,$query);
header("location:acc_settings.php");
}
}
?>