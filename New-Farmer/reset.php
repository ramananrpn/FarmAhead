 
<?php

session_start();
include("db-connection.php");
if(isset($_POST["reset"]))
{
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
$ccpass=$_POST["ccpass"];
$sel="SELECT pin from `f_signup` where `farmer_id`='".$_SESSION["fid"]."'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res);

if($pass==$row["pin"])
{
$query="UPDATE `f_signup` SET `pin`='".$cpass."',`confirm_pin`='".$cpass."' where `farmer_id`='".$_SESSION["fid"]."'";
mysqli_query($conn,$query);
header("location:acc-settings.php");
}
else
echo '<html>
<head>
<meta http-equiv="refresh" content="1;url=acc-settings.php" />
</head>
<body>
Incorrect Password entered
</body>
</html>';

}
?>