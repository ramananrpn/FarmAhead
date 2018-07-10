<?
$servername="localhost";
	$username="root";
	$password="";
	$db="farmahead";
/*CREATING CONNECTION */
	$conn=new mysqli($servername,$username,$password,$db);
/*CHECK CONNECTION*/
	if($conn->connect_error)
		{
				die("Connection Failed : ",$conn->connect_error);
		}
		?>