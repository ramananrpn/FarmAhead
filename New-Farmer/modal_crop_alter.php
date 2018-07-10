<!DOCTYPE html>
<html>
<head>
    <!-- SWEET ALERT  -->
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
</head>

</html>

<?php

  include("db-connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"]))
{
  $qty=$_POST["modal_qty"];
  $id=$_POST["modal_id"];
  $exp_price=$_POST["modal_ep"];
  $desc=$_POST["modal_desc"];


  mysqli_query($conn,"SET NAMES utf8;");   
  $update="UPDATE f_crops_stock SET yield_qty='".$qty."',exp_price='".$exp_price."',description='".$desc."'WHERE id='".$id."'" ;
  if (mysqli_query($conn,$update)) {
    echo '<script type="text/javascript" scr="js/sweetalert.min.js">';
   echo 'swal({
  title: "Are you sure?",
  text: "Your crop will be altered!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-success",
  confirmButtonText: "Alter!",
  closeOnConfirm: false
},
function(){
  swal("Crop Altered!", "The changes you made are saved", "success");
});';
   echo '</script>';

    }

  else{
    echo "FAILED TO UPDATE";
  }
}
?>