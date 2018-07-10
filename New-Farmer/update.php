<?php
session_start();

if(isset($_POST["edit"]))
{
$conn=mysqli_connect("localhost","root","","farmahead");
$name=$_POST["rname"];
$addr=$_POST["raddr"];
$phone=$_POST["rph"];
$city=$_POST["rcity"];
$fid=$_SESSION["fid"];
$query="UPDATE `f_signup` SET `first_name`='".$name."',`address`='".$addr."',`phone`='".$phone."',`city`='".$city."' WHERE `farmer_id`='".$fid."'";
$res=mysqli_query($conn,$query);
header("location:acc-settings.php");
}
?>