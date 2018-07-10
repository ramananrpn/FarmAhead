



<?php
session_start();
include("db-connection.php");
/*AUTO GENERATING FARMER ID*/ 
$sql="SELECT * from f_signup";
$result=mysqli_query($conn,$sql);

$rows=mysqli_num_rows($result);
$d=000;
$id=$d+$rows;
$f_id="FA-0".++$id;  
$fn=$_POST["fname"];
 /*  ====  */
$dob=$_POST["dob"];
$g=$_POST["sex"];

$address=$_POST["address"];

$state=$_POST["state"];
$uid = $_POST["phone"];
$pin = $_POST["pin"];
$cpin = $_POST["cpin"];
$city=$_POST["city"];
$acc= "SELECT * from f_signup where phone ='".$uid."'";
$acc_check=mysqli_query($conn,$acc);

if(mysqli_num_rows($acc_check)>0)
{
	echo '<script language="javascript">';
echo 'alert("Phone Number already Registered")';
echo '</script>';
header("location:farmer-signup.php");
}
else
{
if($pin==$cpin)
{
$s = "INSERT INTO f_signup(farmer_id,first_name,date_of_birth,gender,address,state,city,phone,pin,confirm_pin) VALUES ('$f_id','$fn','$dob','$g','$address','$state','$city','$uid','$pin','$cpin')";
if($conn->query($s)===TRUE)
{
	echo "Successfully added";
	header("location:index.php");}
else
{
	echo '<script language="javascript">';
echo 'alert("Error")';
echo '</script>';

return;

}
}
else
{   
	echo "Password does not match";
}
}
?>