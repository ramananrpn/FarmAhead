<?php

include("db-connection.php");
/*AUTO GENERATING FARMER ID*/ 
$sql="SELECT * from consumer_signup";
$result=mysqli_query($conn,$sql);

$rows=mysqli_num_rows($result);
$d=000;
$id=$d+$rows;
$c_id="FA-C".++$id;  

 /*  ====  */
$un=$_POST["uname"];

$email=$_POST["email"];
$ph=$_POST["ph"];

$pass=$_POST["pass"];

$cpass=$_POST["cpass"];
$city = $_POST["city"];
$acc= "SELECT * from consumer_signup where email ='".$email."'";
$acc_check=mysqli_query($conn,$acc);

if(mysqli_num_rows($acc_check)>0)
{
	echo '<script language="javascript">';
echo 'alert("Phone Number already Registered")';
echo '</script>';
}
else{
	if($pass==$cpass)
	{
$s = "INSERT INTO consumer_signup(cons_id,username,email,phone,password,cpassword,city) VALUES ('$c_id','$un','$email','$ph','$pass','$cpass','$city')";

if($conn->query($s)===TRUE)
{
	echo "Successfully added";
	header("location:index.php");
}
else
{
	echo "ERROR";
}
}
else{
	echo "Password Mismatch";
}

}
?>
