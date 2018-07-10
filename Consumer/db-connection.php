<?php

$server = 'localhost';
$uname = 'root';
$pass = '';
$db = 'farmahead';

$conn = new mysqli($server,$uname,$pass,$db);

if(mysqli_connect_errno())
{
	echo "Failed to connect";
}

?>