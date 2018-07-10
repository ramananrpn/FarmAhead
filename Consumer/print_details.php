<?php
header("Content-Type: application/json; charset=UTF-8");
  include("db-connection.php");
$obj = json_decode($_GET["x"], false);
mysqli_query($conn,"SET NAMES utf8;"); 
$data=array();
$fetch=mysqli_query($conn,"SELECT * from f_crops_stock where id= ".$obj->p_id);
$data=mysqli_fetch_assoc($fetch);
     echo json_encode($data);
     exit;
//echo $p_id;

?>