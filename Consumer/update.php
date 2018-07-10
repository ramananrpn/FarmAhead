<?php
session_start();

if(isset($_POST["edit"]))
{
$conn=mysqli_connect("localhost","root","","farmahead");
$name=$_POST["rname"];
$email=$_POST["remail"];
$phone=$_POST["rph"];
$city=$_POST["rcity"];
$cid=$_SESSION["c_id"];

$query="UPDATE `consumer_signup` SET `username`='".$name."',`email`='".$email."',`phone`='".$phone."',`city`='".$city."' WHERE `cons_id`='".$cid."'";
$res=mysqli_query($conn,$query);
header("location:acc_settings.php");
}
?>