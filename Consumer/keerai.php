<!DOCTYPE html>
 <?php
 session_start();
if($_SESSION['lflag']==0)
  header("location:/../FarmAhead/FA - new/index.php");
header("Content-Type: text/html;charset=UTF-8");

 ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome-Consumer</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<style type="text/css">
 body {
      position: relative;
      overflow-x: hidden;
      overflow-y: scroll; 
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
   .nav :hover{
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
</style>
</head>

<body >
     <!--Navbar-->
     <div class="row" id="home">
        <nav class="navbar navbar-fixed-top navbar-toggleable scrolling-navbar  " style="background-color:#001a1a;width: 100%; " id="myNavbar">

            <div class="container">
               <a class="navbar-toggler navbar-toggler-right hidden-md hidden-lg " type="button" data-toggle="collapse" data-target="#collapseEx12" aria-controls="collapseEx2" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="icons/nav-side.png" style="padding-left: px;padding-top: 20px;"></span>
        </a>
                <!--Navbar Brand-->
                <a class="navbar-brand " href="#"><img src="img/nav1.png" style="height: 35px;width: 170px;"></a>
                <!--Links-->
        <div class="collapse navbar-collapse" id="collapseEx12">
                <ul class="nav navbar-nav smooth-scroll">
                    <li class="nav-item active smooth-scroll" id="tab">
                        <a class="nav-link" href="../Consumer/index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item " id="tab">
                        <a class="nav-link" href="../Consumer/index.php#store">Store</a>
                    </li>
                    <li class="nav-item" id="tab">
                        <a class="nav-link" href="#">Offers</a>
                    </li>
                    <li class="nav-item" id="tab">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                 <ul class="nav navbar-nav navbar-right smooth-scroll mr-auto" style="height: 5px;">
                             
                   <a class="btn btn-floating btn-large blue " href="acc_settings.php"><i class="material-icons">settings</i></a>
                    <li class="nav-item " >
                   <a  ><i class="material-icons left">person_pin</i><?php

                    echo ucwords($_SESSION['c_un']);

                      ?>
                  </a> 
                    </li>
                     
<a class="btn btn-floating btn-large red " href="signout.php"><i class="material-icons">settings_power</i></a>
                       <!-- <li class="nav-item" style="margin-top: -10px;" >
                         <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cart-modal-ex" style="height: 54px;"> 
          <i class="material-icons">shopping_cart</i> Cart </a></li>
            <li class="nav-item" style="margin-top: -10px;" > <button href="#" class="btn btn-danger btn-lg waves-light" style="h" value="Cart" style="height: 20px; " >
          <i class="material-icons">power_settings_new</i> Log Out </button></li>
                  <li class="nav-item"><a href="#" style="margin-right: -100px;"><i class="material-icons" style="color: white;">settings</i></a></li>-->  
                      </ul>
                <!--Search form-->
               <!-- <form class="form-inline pull-xs-right" style="">
                    <input class="form-control" type="text" placeholder="Search" style="color: white; ">
                </form>-->
         </div>            
            </div>

        </nav>
        </div>
        <!--/.Navbar-->
        <div class="row " >
   
          <!-- Button trigger modal -->
          <div class="row">
<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cart-modal-ex" style="z-index: ;">
   <i class="material-icons left">shopping_cart</i>
    <span>Open my cart</span><span class="badge social-counter"></span>
</a>
</div>
<!--<span class="counter">4</span>-->
        </div>
        
       

<!-- Modal -->
<div class="modal fade cart-modal" id="cart-modal-ex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Your cart</h4>
            </div>
            <!--Body-->
            <div class="modal-body">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Product 1</td>
                            <td>Rs 500</td>
                            <td><a><i class="glyphicon glyphicon-remove"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Product 2</td>
                            <td>Rs 1000</td>
                            <td><a><i class="glyphicon glyphicon-remove"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Product 3</td>
                            <td>Rs 100</td>
                            <td><a><i class="glyphicon glyphicon-remove"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Product 4</td>
                            <td>RS 5000</td>
                            <td><a><i class="glyphicon glyphicon-remove"></i></a></td>
                        </tr>
                        <tr class="total">
                            <th scope="row">5</th>
                            <td>Total</td>
                            <td>Rs 10000</td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn btn-primary">Checkout</button>

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
 <!--      <div class="row" style="background-color: ;">
      //Section: Products v.4
<section class="section">

    Section heading
    <h1 class="section-heading">Nuts seeds spices</h1>
  // ection sescription 
      <p class="section-description"> ..    ...................    ..  </p> 
</section>
   
   <h1 class="center" style="color: grey;opacity: 0.2;">No  Farmers Found</h1>


       </div>
     -->
     <div class="text-center row">
    <img src="img/frt-log.png" style="height: 260px;width: 220px;padding-top: 60px;">
  </div>
     <?php

include("db-connection.php");
 $sltcrop=mysqli_query($conn,"SELECT * from keerai_name");
 if(mysqli_num_rows($sltcrop)>0)
   {
    $count=0;
   while($sltcrop_res=mysqli_fetch_assoc($sltcrop))
   {    
        if (($count%5)==0){

          ?> <div class="row" style="">
                 <?php
        }
        ?>
            <div class="col-md-2">
            <!--Card-->
            <a onclick="sendid(this.id)" id="<?php echo $sltcrop_res['crop_id'] ?>">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-2" style="width:250px;">
                    <!--Card image-->
                    <img src="../<?php echo $sltcrop_res['img_url'] ?>" class="img-responsive" style="height:200px;width:240px;">
                    
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="card-footer rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive" style="text-align:center"> <?php echo $sltcrop_res['EngName']; ?></h5></a>
                        <!--Card details-->

                    </div>
                </div>
              </a>
              <script type="text/javascript">
                function sendid(cr_id,name){
                  
                   window.location="cons-farmerview.php?id="+cr_id;
                }
              </script>
                <!--/.Card-->
            </div><div class="col-md-1"></div>
            <?php
                $count++;
                    if(($count+1)%5==0){
                      echo '</div> <br>';
                      $count=0;
                    }  
          }
        }
?>



  <!--================================================-->  

    <!-- SCRIPTS -->
       <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.1.min.js"></script>

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript">
        Waves.attach('.btn, .btn-floating', ['waves-light']);
        Waves.attach('.view .mask', ['waves-light']);
        Waves.attach('.waves-light', ['waves-light']);
        Waves.attach('.navbar li', ['waves-light']);
        Waves.init();
    </script>
<!--=========================SCROLLSPY SMOOTH SCROLL ANIM SCRIPT============================-->
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.js"></script>
    
</body>

</html>