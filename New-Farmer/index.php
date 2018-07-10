
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
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
   </header>
   <!--==================================   NAVBAR END   =========================================-->
   <main>
     <div class="" style="margin-top: -60px;">
       <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
  <div id="wowslider-container0">
  <div class="ws_images"><ul>
    <li><img src="data0/images/3.jpg" alt="3" title="3" id="wows0_0"/></li>
    <li><img src="data0/images/farm_sunrise.png" alt="farm sunrise" title="farm sunrise" id="wows0_1"/></li>
    <li><img src="data0/images/602999.jpg" alt="602999" title="602999" id="wows0_2"/></li>
    <li><img src="data0/images/fieldsfarmerfieldmannaturericeskybeautifulcloudsgreenviewlandscapesunsetscencerylavenderhd.jpg" alt="fields-farmer-field-man-nature-rice-sky-beautiful-clouds-green-view-landscape-sunset-scencery-lavender-hd" title="fields-farmer-field-man-nature-rice-sky-beautiful-clouds-green-view-landscape-sunset-scencery-lavender-hd" id="wows0_3"/></li>
    <li><img src="data0/images/farmers759.jpg" alt="farmers-759" title="farmers-759" id="wows0_4"/></li>
    <li><img src="data0/images/img_0604.jpg" alt="img_0604" title="img_0604" id="wows0_5"/></li>
    <li><img src="data0/images/greenwheatearscloseuponfield600x375.jpg" alt="Green-Wheat-Ears-Close-Up-On-Field-600x375" title="Green-Wheat-Ears-Close-Up-On-Field-600x375" id="wows0_6"/></li>
    <li><img src="data0/images/img_253442.jpg" alt="IMG_253442" title="IMG_253442" id="wows0_7"/></li>
    <li><img src="data0/images/bl28_paddy_819749f.jpg" alt="BL28_PADDY_819749f" title="BL28_PADDY_819749f" id="wows0_8"/></li>
    <li><a href="http://wowslider.com"><img src="data0/images/1.jpg" alt="slider" title="1" id="wows0_9"/></a></li>
    <li><img src="data0/images/602477.jpg" alt="602477" title="602477" id="wows0_10"/></li>
  </ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slideshow</a> by WOWSlider.com v8.7</div>
  <div class="ws_shadow"></div>
  </div>  
  <script type="text/javascript" src="engine0/wowslider.js"></script>
  <script type="text/javascript" src="engine0/script.js"></script>
  <!-- End WOWSlider.com BODY section -->
     </div>
   </main>
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
