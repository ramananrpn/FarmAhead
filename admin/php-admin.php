<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--================================== PHP ================================================-->
<div style="margin-top: 50px;" class="center-block" align="center">
<?php

include("db-connect.php");



$s = "SELECT * FROM admin WHERE admin_id='$uid' AND pwd='$pwd'";

$run = mysqli_query($conn,$s);

if(mysqli_num_rows($run)>0)
{
	echo "yes";
	//header("location:full-access.html");
	$result = mysqli_query($conn,"SELECT * FROM f_signup");
	echo "<table border='10'>";

	$i=0;
	$j=0;
	while($j==0)
	{
		echo "<br>";
		$row = $result->fetch_assoc();
		echo "<tr>";
			foreach($row as $key => $value)
			{
				echo "<th>".$key."</th>";
			}
			echo "</tr><br><tr>";
			foreach($row as $key => $value)
			{
				echo "<td>".$value."</td>";
			}
			echo "<td><a target='_new' href='#'>UPDATE</a></td>";

			echo "</tr>";

			//echo "<td>".$value."</td>";
			$j=1;
	}
	while($row = $result->fetch_assoc())
	{

		if($i>=0)
		{
			//$i++;
			/*echo "<tr>";
			foreach($row as $key => $value)
			{
				echo "<th>".$key."</th>";
			}*/
			echo "<tr>";

			foreach ($row as $key => $value) {
				echo "<td>".$value."</td>";

			}
			echo "<td><a target='_new' href='#'>UPDATE</a></td>";

			echo "</tr>";
		}
		$i++;
		//echo "</table>";
		//mysqli_close($conn);
	}
	echo "</table>";
}
else
{
	echo "ERROR";
}


?>
</div>

<!--======================================= PHP ==================================================-->
</body>
</html>