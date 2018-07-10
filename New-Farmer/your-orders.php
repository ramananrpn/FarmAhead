<?php
session_start();
if($_SESSION['lflag']==0)
  header("location:/../FarmAhead/FA - new/index.php");
header("Content-Type: text/html;charset=UTF-8");

include("db-connection.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Farmer - Welcome</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">
    <!--Materialize css js jqury-->
  
<script src="js/materialize.min.js" type="text/javascript"></script>
 <script src="js/jquery-2.1.4.min.js"></script>
 <!--===============ICON=============-->
<link rel="icon" type="image/x-icon" href="../url logo/logo.png">

  <!--script src="js/jquery-2.1.1.min.js"></script-->
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
   
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="engine0/style.css" />
  <link rel="icon" type="image/png" href="../url logo/logo1.png" sizes="100*100">

  <!--script type="text/javascript" src="engine0/jquery.js"></script-->
  <!-- End WOWSlider.com HEAD section -->
</head>

<style type="text/css">
  @font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src:  local('MaterialIcons-Regular'), url(woff/material.woff2) format('woff2');
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
#container {
  padding-left: 300px;
}

#content {
  padding: 20px;
}

@media only screen and (max-width : 992px) {
  #container {
    padding-left: 0px;
  }
}
</style>
<body>

    <!-- Start your project here-->

 <header>
     <div class="row  navbar-fixed" >
    
     <nav style="background-color: #001a33;" >
          <div class="nav-wrapper ">
       <a class="navbar-brand left"  style="position: relative; top: -5px;left: 20px;" href="index.php"><img src="img/nav1.png" alt="Farmahead" height="30px;" width="155px; "></a>
    </div>


  </nav>
 <!--  
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,ta', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     -->   
     <!-- <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>-->
   
  <div  id="menu">
      
      <ul id="slide-out" class="side-nav fixed show-on-large-only">
   

       <li><div class="userView" style="background-image: url(img/602999.jpg);background-size: 100% 170px; background-repeat: no-repeat;">
          
      <a href="#!user"><img class="circle" src="img/images.png" style="height: 70px;width: 70px;"></a>
      <a href="#!name"><span class="white-text name" style="position: relative; font-size: 30px; top:20px;">
        <?php
   echo $_SESSION['un'];
   echo "<br>";
          ?>
      </span></a>
      <a href="#!number"><span class="white-text name" style="position: relative; font-size: 18px;margin-top: 5px;"><strong>
          <?php 
          echo $_SESSION['ph'];
          ?>
      </strong></span></a>
    </div></li>
      <!--<li><a href="#!">Update Crops</a></li>
      <li><a href="#!">Schemes</a></li>
      <li><a href="#!">Online Store</a></li>
      <li><a href="#!">Account Settings</a></li>
      <li><a href="#!">Your Orders</a></li>-->


      <a class="waves-effect waves-light btn-large" href="add-crop-ctg.php">Add Crops</a>
       <a class="waves-effect waves-light btn-large" href="view_crop.php">View your Crops</a>
      <!--<a class="waves-effect waves-light btn-large" >Schemes</a>-->
      <!--<a class="waves-effect waves-light btn-large"><i class="material-icons left">queue</i>Online Store</a>-->
      <a class="waves-effect waves-light btn-large" href="acc-settings.php"><i class="material-icons left">contacts</i>Account Settings</a>
      <a class="waves-effect waves-light btn-large disabled" href="your-orders.php"><i class="material-icons left">shopping_cart </i>Your Orders</a>
       <li><div class="divider"></div></li>
     <div> <a class="waves-effect waves-light btn-large" style="background-color:#ff1a1a;"  href="signout.php"><i class="material-icons left">power_settings_new</i>Sign out வெளியேறு</a></div>
      
    </ul>
        <!-- <nav style="background-color: #001a33;" >
    <div class="nav-wrapper">
       <a class="navbar-brand"  style="position: relative; top: -5px;left: 20px;" href="#"><img src="img/nav1.png" alt="Farmahead" height="30px;" width="155px; "></a>
      
  <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>-->
  </div>
   </div>
   <div id="content">
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
   </header>
   <!--==============================================================================-->

   <!--<center><h3> No Orders till now</h3></center>-->

   <?php
   $i=0;
   $sel = "SELECT *  FROM order_details WHERE farmer_id ='".$_SESSION['f_id']."' ";

$run = mysqli_query($conn,$sel);

if(mysqli_num_rows($run)>0)
{
  while($row = mysqli_fetch_array($run))
{
  ?>
    <div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-8">
    <center><h4>Order <?php echo ++$i; ?><span style="font-size"></span></h4></center>
<table class="table table-hover" width="500px">
        <tbody>
            <tr>
                <td>Name : <?php echo $row['bill_name']; ?></td>
            </tr>

              <tr>
               <td> Address : <?php echo $row['bill_address']; ?></td>
             </tr>

             <tr>
                <td>City : <?php echo $row['bill_city']; ?></td>
            </tr>
            
              <tr>
               <td> State : <?php echo $row['bill_state']; ?></td>
             </tr>
             <tr>
                <td> Pincode : <?php echo $row['bill_pin']; ?></td>
            </tr>
            
              <tr>
               <td>Phone Number : <?php echo $row['bill_ph']; ?></td>
             </tr>
            
        </tbody>
    </table>
</div>
</div>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-8">
<table class="table table-hover" width="500px">
        <thead>
            <tr>
             
                <th>Product Name</th>
                 <th> Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
               <td><?php echo $row['pro_name']; ?></td>
                <td><?php echo $row['con_qty']." ".$row['con_unit']; ?></td>
                <td>₹ <?php echo $row['price']; ?></td>
               
            </tr>
            
        </tbody>
    </table>
</div>
</div>
  <?php
    echo $row['pro_name'];
  }
  
}
else
{
  echo "Not work";
}


   ?>
   <!--==================================   NAVBAR END   =========================================-->
   <!--==================================  SIDE BAR  =========================================-->
   <!--<div class="container"><a href="#" <data></data>ta-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
   <ul id="nav-mobile" class="side-nav fixed">

       <li><div class="userView" style="background-image: url(img/602999.jpg);background-size: 100% 170px; background-repeat: no-repeat;">
     
      <a href="#!user"><img class="circle" src="img/images.png" style="height: 70px;width: 70px;"></a>
      <a href="#!name"><span class="white-text name" style="position: relative; font-size: 30px;">User Name</span></a>
      <a href="#!number"><span class="white-text name" style="position: relative; font-size: 15px;margin-top: 5px;"><strong>9715716230</strong></span></a>
    </div></li>-->
      <!--<li><a href="#!">Update Crops</a></li>
      <li><a href="#!">Schemes</a></li>
      <li><a href="#!">Online Store</a></li>
      <li><a href="#!">Account Settings</a></li>
      <li><a href="#!">Your Orders</a></li>-->
      <!--<a class="btn btn-outline-secondary btn-rounded waves-effect">Update Crops</a>
      <a class="btn btn-outline-secondary btn-rounded waves-effect">Schemes</a>
      <a class="btn btn-outline-secondary btn-rounded waves-effect"><i class="material-icons left">queue</i>Online Store</a>
      <a class="btn btn-outline-secondary btn-rounded waves-effect"><i class="material-icons left">contacts</i>Account Settings</a>
      <a class="btn btn-outline-secondary btn-rounded waves-effect"><i class="material-icons left">shopping_cart </i>Your Orders</a>
       <li><div class="divider"></div></li>
     <div> <a class="waves-effect waves-light btn-large"><i class="material-icons left">power_settings_new</i>Sign out வெளியேறு</a></div>
      
    </ul>-->
      <!--==================================  SIDE BAR  END=========================================-->
     

   <!--==================================   NAVBAR END   =========================================-->
   <!--==================================  SIDE BAR  =========================================-->
   <!--<div class="container"><a href="#" <data></data>ta-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
   <ul id="nav-mobile" class="side-nav fixed">

       <li><div class="userView" style="background-image: url(img/602999.jpg);background-size: 100% 170px; background-repeat: no-repeat;">
     
      <a href="#!user"><img class="circle" src="img/images.png" style="height: 70px;width: 70px;"></a>
      <a href="#!name"><span class="white-text name" style="position: relative; font-size: 30px;">User Name</span></a>
      <a href="#!number"><span class="white-text name" style="position: relative; font-size: 15px;margin-top: 5px;"><strong>9715716230</strong></span></a>
    </div></li>-->
      <!--<li><a href="#!">Update Crops</a></li>
      <li><a href="#!">Schemes</a></li>
      <li><a href="#!">Online Store</a></li>
      <li><a href="#!">Account Settings</a></li>
      <li><a href="#!">Your Orders</a></li>-->
      <!--<a class="btn btn-outline-secondary btn-rounded waves-effect">Update Crops</a>
      <a class="btn btn-outline-secondary btn-rounded waves-effect">Schemes</a>
      <a class="btn btn-outline-secondary btn-rounded waves-effect"><i class="material-icons left">queue</i>Online Store</a>
      <a class="btn btn-outline-secondary btn-rounded waves-effect"><i class="material-icons left">contacts</i>Account Settings</a>
      <a class="btn btn-outline-secondary btn-rounded waves-effect"><i class="material-icons left">shopping_cart </i>Your Orders</a>
       <li><div class="divider"></div></li>
     <div> <a class="waves-effect waves-light btn-large"><i class="material-icons left">power_settings_new</i>Sign out வெளியேறு</a></div>
      
    </ul>-->
      <!--==================================  SIDE BAR  END=========================================-->
     

<script type="text/javascript">
  $('.button-collapse').sideNav({
  menuWidth: 300, // Default is 300
  edge: 'left', // Choose the horizontal origin
  closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
  draggable: true // Choose whether you can drag to open on touch screens
});
</script>
    
<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

      <script type="text/javascript" src="js/sidenav.js"></script>

</body>

</html>
