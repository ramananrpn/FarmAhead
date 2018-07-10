<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if($_SESSION['lflag']==0)
  header("location:/../FarmAhead/FA - new/index.php");
header("Content-Type: text/html;charset=UTF-8");

include("db-connection.php");
   ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FarmAhead | Checkout</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="mdb4/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="mdb4/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="mdb4/css/style.css" rel="stylesheet">

     <script type="text/javascript" src="js/sweetalert.js"></script> 

<style type="text/css">
 body {
            overflow-x: hidden;
      overflow-y: scroll; 
      background-size: 80%;
      text-align: center;
      margin-top: 100px;
      
  }
  #tab :hover{
    background-color: black;
  }
/* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: local('Material Icons'), local('MaterialIcons-Regular'), url(woff/mdbicons.woff2) format('woff2');
}



.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}
#acc :hover{
  background-color: black;
}
   
   .bg{
    background: url('img/563.jpg');
    background-size: 100% 720px; width:xxpx;
    height:xxpx;
    background-repeat: no-repeat;
   }
   /* Scrollbar */
    
    ::-webkit-scrollbar {
        width: 8px;
    }
    /* Track */
    
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }
    /* Handle */
    
    ::-webkit-scrollbar-thumb {
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background: #your-color;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }
    
    ::-webkit-scrollbar-thumb:window-inactive {
       background: #your-color;
    }
    .button {
  width: 54px;
  height: 54px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  z-index: 4;
  position: relative;
  transition: 1.25s all ease .1s;

}

.main-button {
  background: #ff2670;
  -webkit-align-self: flex-end;
  -ms-flex-item-align: end;
  align-self: flex-end;
}

</style>

<body background ="img/bggg.png">
    <!--Navbar-->

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar " style="background-color:#001a1a;width: 100%; " id="myNavbar">

            <div class="container">
               <a class="navbar-toggler navbar-toggler-right hidden-md hidden-lg " type="button" data-toggle="collapse" data-target="#collapseEx12" aria-controls="collapseEx2" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="icons/nav-side.png" style="padding-left: px;padding-top: 20px;"></span>
        </a>
                <!--Navbar Brand-->
                <a class="navbar-brand " href="#"><img src="img/nav1.png" style="height: 35px;width: 170px;"></a>
                <!--Links-->
        <div class="collapse navbar-collapse" id="collapseEx12">
                <ul class="navbar-nav mr-auto" style="font-size: 18px;">
                    <li class="nav-item active smooth-scroll" id="tab">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item smooth-scroll" id="tab">
                        <a class="nav-link" href="#store">Store</a>
                    </li>
                    <li class="nav-item" id="tab">
                        <a class="nav-link" href="#">Offers</a>
                    </li>
                    <li class="nav-item" id="tab">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                       <li class="nav-item " >
                   <a style="color: white;font-size: 18px;" class="nav-link" ><i class="material-icons">person_pin</i>&nbsp;&nbsp;&nbsp;<?php

                    echo ucwords($_SESSION['c_un']);

                      ?>
                  </a> 
                    </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                   <a class="button main-button blue" class="nav-link" href="acc_settings.php"><i class="material-icons" style="color: white;margin-top: 13px;">settings</i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    
<a class="button main-button red " href="signout.php" class="nav-link"><i class="material-icons" style="color: white;margin-top: 13px;">settings_power</i></a>

                    </ul>
                
               
         </div>            
            </div>

        </nav>
       
        <!--/.Navbar-->

        <!--===========TABLE==========-->
         <?php
                 $total = 0;
                 $i=1;
                ?>
        <!--Table-->
      
      <br>
        <div class="container-fluid row">
<div class="container col-sm-7" align="center">
     <h2>Delivery Address</h2>
    <br>
              <!-- Form contact -->
<form style="width: 500px;" action="" method="POST">
    <div class="md-form">
        
        <input type="text" id="ck_name" name="ck_name" class="form-control" required>
        <label for="ck_name">Name</label>
    </div>
        <div class="md-form">
        
        <textarea type="text" id="ck_add" name="ck_add" class="md-textarea" style="height: 50px"  required></textarea>
        <label for="ck_add">Address</label>
    </div>
        <div class="md-form row">
        <div class="col-sm-6">
        <input type="text"  class="form-control" name="ck_city" id="ck_city" required>
        <label for="ck_city">City/District/Town</label>
    </div>

    <div class="col-sm-6">
        <input type="text" id="ck_state" name="ck_state" class="form-control"  required>
        <label for="ck_state">State</label>
    </div>
    </div>

    <div class="md-form row">
        <div class="col-sm-6">
        <input type="text" id="ck_pin" name="ck_pin" class="form-control"  required>
        <label for="ck_pin">Pincode</label>
    </div>

    <div class="col-sm-6">
        <input type="text" id="ck_ph" name="ck_ph" class="form-control" required>
        <label for="ck_ph">Phone Number</label>
    </div>
    </div>

   <div class="text-center">
        <button type="submit" class="btn btn-mdb" name="ck_but">Place Order</button>
    </div>

</form>
<!-- Form contact -->
</div>                   
<!--Table-->
<div class="col-sm-5">
     <h2>Order Summary</h2>
<table class="table " >
    <!--Table head-->
    <thead class="mdb-color darken-3">
        <tr class="text-white">
            <th></th>
                 <th><center>Product</center></th>
            
                <th><center>Quantity</center></th>
              
                <th><center>Amount</center></th>
                <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody >
         <?php 

      if(isset($_SESSION['product_cart']))
      {
        if(array_key_exists('product_cart',$_SESSION) && !empty($_SESSION['product_cart'])) 
        {
      foreach($_SESSION['product_cart'] as $data)
      {
      ?>
        <tr >
            <th scope="row" style="font-size: 18px;">
              
                  <?php   echo $i++; ?>
            </th>
            <td style="font-size: 18px;"><?php echo $data['title']; ?></td>
            <td style="font-size: 18px;"><?php echo $data['quantity']." ".$data['qty_unit'];?></td>
            <td style="font-size: 18px;">₹ <?php echo $data['price'];?></td>
        </tr>
       <?php
      $total += $data['price'];
       } 

       } 
       else
       {
        ?><tr>
         
           <th align="center" colspan="6" ><br>
          <h5  style="opacity: 0.5;" align="center">No Item(s) in cart..</h5>
          <br>
        </th>
        </tr>
        <?php
       }
 }
         else
       {
        ?><tr>
         
           <th align="center" colspan="6" ><br>
          <h5  style="opacity: 0.5;" align="center">No Item(s) in cart..</h5>
          <br>
        </th>
        </tr>
        <?php
       }

      ?>

    </tbody>
    <!--Table body-->

</table>

<!--Table-->
<hr>
 <h3 style="margin-left: 260px;">Total : <span>₹ <?php echo $total ?></span></h3>
 </div>
 <br>
 <?php

$cons = "SELECT * FROM consumer_signup WHERE cons_id = '".$_SESSION['c_id']."'";;
$run = mysqli_query($conn,$cons);
if(mysqli_num_rows($run)>0)
{
$bill = mysqli_fetch_assoc($run);
    }
 ?>
  
</div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="mdb4/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="mdb4/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="mdb4/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="mdb4/js/mdb.min.js"></script>
</body>

</html>
   <?php
    if(isset($_REQUEST["ck_but"]))
    {
$success=0;
 
       /*AUTO GENERATING order ID*/ 
        $order_id=uniqid("FA-");  
        $cons_id=$_SESSION['c_id'];
         $ck_name=$_POST["ck_name"];
        $ck_add =$_POST["ck_add"];
        $ck_city=$_POST["ck_city"];
        $ck_add =$_POST["ck_add"];
        $ck_city=$_POST["ck_city"];
        $ck_state =$_POST["ck_state"];
        $ck_pin=$_POST["ck_pin"];  
        $ck_ph = $_POST["ck_ph"];
  
        foreach ($_SESSION['product_cart'] as $value) {
          # code...
        $sno=uniqid();
        $fid =$value['f_id'];
           $p_id = $value['p_id'];
          
           $pro_con_name = $value['title'];
           $con_qty =$value['quantity'];
           $con_unit = $value['qty_unit'];
           $price = $value['price'];
              $add="INSERT INTO `order_details`(`sno`, `order_id`, `cons_id`, `farmer_id`, `prod_id`, `pro_name`, `con_qty`, `con_unit`, `bill_name`, `bill_address`, `bill_city`, `bill_state`, `bill_pin`, `bill_ph`,`price`) VALUES ('".$sno."','".$order_id."','".$cons_id."','".$fid."','".$p_id."','".$pro_con_name."','".$con_qty."','".$con_unit."','".$ck_name."','".$ck_add."','".$ck_city."','".$ck_state."','".$ck_pin."','".$ck_ph."','".$price."')";

       if (mysqli_query($conn, $add)) 
       {
        $success=1;
       } 
      else
      {
        $success=0;
      echo "Error updating report: " . mysqli_error($conn);
      }
    }
    if($success==1)
    {
    ?>
    <script>
    setTimeout(function() {
        swal({
            title: "Order Placed Succesfully",
            text: "Your Order-ID : <?php echo $order_id; ?> ",
            type: "success"
     }).then(function() {
        <?php unset($_SESSION["product_cart"]); ?>
window.location.href = "index.php";
        });
    });
   
</script>
    <?php

    }  
  }
?>