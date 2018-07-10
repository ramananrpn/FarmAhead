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
                    
                   <a class="button main-button blue" class="nav-link"><i class="material-icons" style="color: white;margin-top: 13px;">settings</i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    
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
        <?php
                 $total = 0;
                ?>
<!--Shopping Cart table-->
<div class="table-responsive">
    <table class="table product-table table-hover">
        <!--Table head-->
        <thead>
            <tr>
               
                <th></th>
                 <th><center>Product</center></th>
               <!-- <th>Color</th>
                <th>Size</th>-->
                
                <th><center>Quantity</center></th>
                <th><center>Price</center></th>
                <th><center>Amount</center></th>
                <th></th>
            </tr>
        </thead>
        <!--/Table head-->

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
            <!--First row-->
            <tr>
                <th scope="row">
                    <img src="../<?php echo $data['image']; ?>" alt="" class="img-fluid " style="width: 90px;height: 75px;" >
                </th>
                <td><br>
                    <h5><strong><?php echo $data['title']; ?></strong></h5>
                    <br>
                    <!--<p class="text-muted">by FifeSteps</p>-->
                </td>
               <!-- <td>Blue</td>
                <td>38</td>-->
               
                <td>
             
              <h5><strong><br><?php echo $data['quantity']." ".$data['qty_unit'];?> <br> </strong></h5>                 
                </td>

                 <td><h5><br><?php echo "₹ ".$data['exp_price']." per ".$data['exp_price_unit']." * ".$data['quantity']." ".$data['qty_unit']; ?><br></h5></td>

                <td><h5><br>₹ <?php echo $data['price'];?><br></h5></td>
                <td><br>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item" onclick="remove_item('<?php echo $data['p_id']; ?>');">X
                    </button><br>
                </td>
            </tr>
            <!--/First row-->
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
         

            <!--Fourth row-->
            <tr>
                <td colspan="3"><button type="button" class="btn btn-warning" onclick="move();" >Continue Purchase</button></td>
                <td>
                    <h4><strong>Total</strong></h4></td>
                <td>
                    <h4><strong>₹ <?php echo $total ?></strong></h4></td>
                <td colspan="3"><button type="button" class="btn btn-primary" onclick="ckout();">Check Out  <i class=""></i></button></td>
            </tr>
            <!--/Fourth row-->

        </tbody>
        <!--/Table body-->
    </table>
</div>


<script>
  function move()
  {
    window.location="index.php";
  }
  function ckout()
  {
    window.location="checkout.php";
  }
</script>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="mdb4/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="mdb4/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="mdb4/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="mdb4/js/mdb.min.js"></script>
    <script type="text/javascript">
  function remove_item(p_id)
  {
     //alert(p_id);
  $.ajax({
    type:"post",
    url:"ajax_cart.php",
   data:{action:'delete',p_id:p_id},
    success:function(result){
      $('.cart_data').html(result);
    window.location.reload();
    }
  });
  }
</script>


   
</body>

</html>
