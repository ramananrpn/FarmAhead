<?php
session_start();
if($_SESSION['lflag']==0)
  header("location:/../FarmAhead/FA - new/index.php");
header("Content-Type: text/html;charset=UTF-8");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add-Crop</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">
    <!--Materialize css js jqury-->
  
<script src="js/materialize.min.js" type="text/javascript"></script>
 <script src="js/jquery-2.1.4.min.js"></script>
  <!--script src="js/jquery-2.1.1.min.js"></script-->
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
   
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../url logo/logo1.png" sizes="100*100">

</head>
<style type="text/css">
body{
  text-align: center;
}
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

.cont{
  margin-left: 300px;
}
.img-responsive{

    max-width:100% !important;
    height:auto;
    display:block;

}
 /* Scrollbar */
    
    ::-webkit-scrollbar {
        width: 18px;
    }
    /* Track */
    
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        -webkit-border-radius: 10px;
        border-radius: 1px;
    }
</style>
<body background="img/bggg.png">

    <!-- Start your project here-->
     <!-- Start your project here-->
 <header>
     <div class="row  navbar-fixed" >
    
     <nav style="background-color: #001a33;" >
    <div class="nav-wrapper left">
       <a class="navbar-brand "  style="position: relative; top: -5px;left: 20px;" href="index.php"><img src="img/nav1.png" alt="Farmahead" height="30px;" width="155px; "></a>
  
    </div>

  </nav>
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

      <a class="waves-effect waves-light btn-large disabled" href="add-crop-ctg.php">Add Crops</a>
      <a class="waves-effect waves-light btn-large" href="view_crop.php">View your Crops</a>
      <!--<a class="waves-effect waves-light btn-large" >Schemes</a>
      <a class="waves-effect waves-light btn-large"><i class="material-icons left">queue</i>Online Store</a>-->
      <a class="waves-effect waves-light btn-large" href="acc-settings.php"><i class="material-icons left">contacts</i>Account Settings</a>
      <a class="waves-effect waves-light btn-large" href="your-orders.php"><i class="material-icons left">shopping_cart </i>Your Orders</a>
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
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a></div>
    
   </header>

  <br>

<div class="row ">

<div class="col-md-5"></div>
        <div class="col-md-5">
 
<section style="margin-top: -120px;">
  <div class="btn" style="color: white; position: relative;top: 80px;right: 400px;"> <a href="index.php" style="color: white">Back </a></div>
 <h3 class="section-heading  col-sm-12 " style="text-align:center;">Category / பயிர் வகை</h3>
  <!--Section sescription-->
    <p class="section-description">பயிர் வகை தேர்வு</p>
 </section></div>

 <div class="row">
<div class="col-md-3"></div>

            <div class="col-md-2">
            <!--Card-->
             <a href="form-vege.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                   
                    <img src="img/vege.jpg" class="img-responsive" style="" >
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class=" rgba-white-strong" style="">
                        <!-- Title -->
                        <a href="form-vege.php" class="black-text"><h5 class="h5-responsive">காய்கறிகள்-Vegetables </h5></a>
                        <!--Card details-->
                    </div>
                </div>
                </a>
                <!--/.Card-->
            </div>

            <div class="col-md-2">
               <!--Card-->
               <a href="form-fruit.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                    <img src="img/frits.jpg" class="img-responsive">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Fruits-பழங்கள்</h5></a>
                        <!--Card details-->
                    </div>
                </div>
                </a>
                <!--/.Card-->
            </div>

            <div class="col-md-2">
               <!--Card-->
               <a href="form-keerai.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                    <img src="../stock-images/keerai/all keerai.jpg" class="img-responsive">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">
கீரை  வகைகள்</h5></a>
                        <!--Card details-->
                    </div>
                </div>
                </a>
                <!--/.Card-->
            </div>
             <div class="col-md-2">
               <!--Card-->
               <a href="form-flower-name.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                    <img src="img/fllrr.jpg" class="img-responsive">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Flowers / மலர்கள்</h5></a>
                        <!--Card details-->
                    </div>
                </div>
                </a>
                <!--/.Card-->
            </div>
        </div>

        <br><br><br>
        <div class="row">
        
        <div class="col-md-5"></div>
        <div class="col-md-4">
        <section style="margin-top: -70px;" >
 <h4 class="section-heading   col-sm-12" style="text-align: center;">தேங்காய்</h4>
  <!--Section sescription-->
    <p class="section-description"></p>
 </section></div>
 <br>
          <div class="col-md-5"></div>
           <div class="col-md-2">
               <!--Card-->
               <a href="form-coc_water.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                    <img src="img/coc.jpg" class="img-responsive">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive"> இளநீர் </h5></a>
                        <!--Card details-->
                    </div>
                </div>
                </a>
                <!--/.Card-->
            </div>

            <div class="col-md-2">
               <!--Card-->
               <a href="form-coconut.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                    <img src="img/123.jpg" class="img-responsive">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">தேங்காய்</h5></a>
                        <!--Card details-->
                    </div>
                </div>
                <!--/.Card-->
                </a>
            </div>

             
        </div>
        <br><br><br>
        <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5">
        <section style="margin-top: -70px;">
 <h4 class="section-heading center  col-sm-12" style="text-align: center;">மூலப்பொருள் பயிர்கள்</h4>
  <!--Section sescription-->
    <p class="section-description"></p>
 </section></div>
 <br>
          <div class="col-md-4"></div>
           <div class="col-md-2">
               <!--Card-->
               <a href="form-rice.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                    <img src="../stock-images/paddy/rice.jpg" class="img-responsive">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Rice / அரிசி</h5></a>
                        <!--Card details-->
                    </div>
                </div>
                <!--/.Card-->
            </div>

            <div class="col-md-2">
               <!--Card-->
               <a href="form-sugarcane.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                    <img src="img/ssss.jpg" class="img-responsive">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">கரும்பு
 / Sugarcane</h5></a>
                        <!--Card details-->
                    </div>
                </div>
                <!--/.Card-->
            </div>

              <div class="col-md-2">
               <!--Card-->
               <a href="form-tumeric.php">
                <div class="collection-card hoverable view overlay hm-zoom z-depth-1">
                    <!--Card image-->
                    <img src="img/turmeric.jpg" class="img-responsive">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">மஞ்சள்  / Turmeric</h5></a>
                        <!--Card details-->
                    </div>
                </div>
                <!--/.Card-->
            </div>
        </div>
        </div>

    
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
