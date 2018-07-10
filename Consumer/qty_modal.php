<?php
header("Content-Type: application/json; charset=UTF-8");
  include("db-connection.php");
$obj = json_decode($_GET["x"], false);
mysqli_query($conn,"SET NAMES utf8;"); 
$data=array();

$fetch=mysqli_query($conn,"SELECT * FROM `f_crops_stock` WHERE `id` = ".$obj->cro_id. " AND `farmer_id` in (SELECT * from `f_signup` WHERE `farmer_id` = ".$obj->f_id);
$data=mysqli_fetch_assoc($fetch);
     echo json_encode($data);
     exit;
//echo $p_id;

?>