
<?php

session_start();
if(isset($_SESSION["f_id"]))
{
  header("location:../New-Farmer/index.php");
}
if(isset($_SESSION["c_id"]))
{
  header("location:../Consumer/index.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<title>FarmAhead.com</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.4.css" >

<!-- <script src="bootstrap.min.js" type="text/javascript"></script> -->
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
<!--===================SCROLL FIRE=========================-->
  <script type="text/javascript" src="js/jquery-1.11.0.js"></script>  
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--================ihover========================-->
    <link rel="stylesheet" href="css/ihover.css"/>

     <!--===============ICON=============-->
<link rel="icon" type="image/png" href="../url logo/logo1.png" sizes="100*100">
   
<style type="text/css">
 body {
      position: relative;
      overflow-x: hidden;
      overflow-y: scroll; 
  }
  .ft{
    font-family: "Comic Sans MS", cursive, sans-serif;
}
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
   /* Scrollbar */
    
    ::-webkit-scrollbar {
        width: 12px;
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
    .sizer{
      width: 600px;
      height: 500px;
    }
</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" >
<!--==========HEADER===========-->
 	<header class="row" >
 		<div class=" col-md-6 ">
 			<a href="index.php"><img src="img/FA-logo.png " alt="FarmAhead - Click for HOME" class="img-responsive" id="img" style="position: relative; height : 130px; width : 590px;"></a>
 		</div>
 		<!--============HEADER COL - SIDE TEXT===================-->
 		<div class=" col-md-6 ">
 			<div class="text-left hidden-xs hidden-sm" style="position: relative; font-size: 28px; top: 45px; right: -100px; z-index: 10;">
 				An Exclusive Agriculture Website!<br>Cultivate on Lands & Harvest Online!!
 			</div>
 		</div>	
 	</header>
 	<!--==================ROW=======================-->
<!--================================================NAVBAR==================================--> 
 		<div  class="container-fluid">
 	<div class="row ">
		<nav class=" navbar-inverse"  data-spy="affix" data-offset-top="60" data-offset-bottom="200">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"  style="position: relative; top: -3px;" href="index.php"><img src="img/nav1.png" alt="Farmahead" height="25px;" width="133px; "></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active" style="font-size: 20.5px;"><a href="#img">Home </a></li>
       <li><a href="#services" style="font-size: 20.5px;">Services</a></li>
        <li><a href="#about" style="font-size: 20.5px;">About Us</a></li>
        <li><a href="#contact" style="font-size: 20.5px;">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup-select.php" style="font-size: 20.5px;"  data-toggle="tooltip" data-placement="bottom"  title="Click to Sign Up "><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         <li class="dropdown" data-toggle="tooltip" data-placement="top"  title="Click to Login " style="font-size: 20.5px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#S"  aria-haspopup="true" aria-expanded="false" ><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
               <ul class="dropdown-menu" style="font-size: 20.5px;">
            <li><a href="login-farmer.php">  <img src="img/farm.png" style=" height: 30px;width: 30px;">&nbsp;Farmer</a></li>
            <li><a href="login-consumer.php">  <img src="img/consumer.png" style=" height: 30px;width: 30px;">&nbsp;Consumer</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
	</div>
	</div>
	<!--=====================IMAGE -  - -CARAUSEL=====================-->
 	<div class="row container-fluid" id="carsoul">
			  	<div id="carousel1" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
					      <li data-target="#carousel1" data-slide-to="1"></li>
					      <li data-target="#carousel1" data-slide-to="2"></li>
					</ol>
			   			  <div class="carousel-inner" role="listbox">
					    	<!-- IMG 1-->
					      <div class="item active"><img src="images/Kerala_Tour_Packages.jpg" alt="First slide image" class="center-block">
					      </div>
					       <!-- IMG 2-->
					      <div class="item"><img src="images/pexels-photo-94039.jpeg" alt="Second slide image" class="center-block">
					      </div>
					       <!-- IMG 3-->
					      <div class="item"><img src="images/agriculture[1].jpg" alt="Third slide image" class="center-block"> 
					      </div>
			    	</div>
		    	</div>
 	</div>	
 	
  <!--==================================CAROUSEL END=============================-->
  <!--==================================SERVICES==========================================-->
  <section class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
<div class="" id="services" >
<div class="well text-center" style="border-color: black;border-radius: 30px;background-color: white;" >
  <h2><strong>SERVICES</strong></h2>
  <h4>What we offer</h4>
  <br><br>
  <div class="container">
  <div class="row container">
  <div class="col-sm-4 ">
    <div class="center-block">
      <span class="center-block"><a ><img src="img/aaa.png "  class="img-responsive" id="img" style="position: relative;height: 160px; "></a>
    </span>
      <h4>Self Crop Updation</h4>
      <p></p>
    </div>
    </div>
    <div class="col-sm-4">
      <span class="center-block"><a><img src="img/jj.png "  class="img-responsive" id="img" style="position: relative;height: 160px; "></a>
    </span>
      <h4>Increasing Farmer's Profit Rate</h4>
      <p></p>
    </div>
    <div class="col-sm-4">
     <span class="center-block"><a ><img src="img/shopicon.png "  class="img-responsive" id="img" style="position: relative;height: 160px; "></a>
    </span>
      <h4>Online Purchase</h4>
      <p></p>
    </div>
    <br>
    </div>
   
    <br><br><br>
  <div class="row">
    <div class="col-sm-4">
     <span class="center-block"><a><img src="img/consumer.png "  class="img-responsive" id="img" style="position: relative;height: 160px; "></a>
    </span>
      <h4>Self-Marketing</h4>
      <p></p>
    </div>
    <div class="col-sm-4">
      <span class="center-block"><a><img src="img/cfd.png "  class="img-responsive" id="img" style="position: relative;height: 160px; "></a>
    </span>
      <h4>Farmer - to - Customer deals </h4>
      <p></p>
    </div>
    <div class="col-sm-4">
      <span class="center-block"><a><img src="img/plp.png "  class="img-responsive" id="img" style="position: relative;height: 170px; "></a>
    </span>
      <h4>Online Fertilizer Sale</h4>
      <p></p>
    </div>
  </div>
  </div>
</div>
</div>

</section>
<!--===================================================END==================================-->
   <!-- Second Container -->
   <div class="col-sm-8 col-md-12 " >
<div class=" text-center" style="">
<div class="well" style=" font-family: caveat;font-size: 30px;width: 100%;border-color: black;border-radius: 10px;background-color:white; ;color: ;" id="about">
<section class="staggered-animation-container">
      <h1 style="font-size: 40.5px;" class="staggered-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.5s"><strong>ABOUT US</strong></h1>
       <!--<div class="container ">
   <div class="col-md-12  ">
            <div class="embed-responsive embed-responsive-16by9 " style="position: relative; "">
                <video width="540" height="20" class="center-block embed-responsive-item" src="video/abtt.mp4" allowfullscreen="yes " controls muted></video>
            </div><!--./vid 
            
        </div><!--.col -->
        
        <h2 style="text-align:center"  class="staggered-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.8s">Agriculture and technology, two extremes of sustainable development in their element. FarmAhead is a combination of these focus in making as a super power. It matches towards excellence in hassle-free dealership of agricultural goods and first hand counselling of experts on agriculture. This one step towards betterment of farmers leads to betterment of agriculture,in turn a better WORLD...!</h2>

  
     
      <h3 style="font-size: 32.5px;" style="text-align:center"  class="staggered-animation" data-os-animation="fadeInRight" data-os-animation-delay="1.1s"><strong>Highlights:</strong><br> <br><li>
      Farmer - to - Customer deals </li><br><li>No mediator or Brokership</li><br> <li>
     Comparison of deals(cost) </li><br><li>A great step in march towards DIGITAL INDIA !</li></h3>
     </section>
    </div>
    </div>
</div><br>

<!--=============================================BELOW CAROUSEL================================-->
<!--===========================CONTACT US FORM================================ -->
<br>

<div class="row" >
<div  class="container-fluid bg-black" id="" style="background-color:;color: black;"><br>
 
  <h2 class="text-center " >CONTACT US</h2><br>
  <div class="row">
    <div class="col-sm-5" id="contact">
    <h4>
      <p>&nbsp;&nbsp;&nbsp;Contact us and we'll get back to you within 24 hours.</p>
      <p>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span> Developers - Ramanan R , Suryan Saravanan ,Bharathi K</p>
      <p>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-map-marker"></span> Coimbatore ,Tamilnadu</p>
      <p>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-phone"></span> +91 971-571-6230</p>
      <p>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope"></span> farmahead@gmail.com</p></h4>
    </div>
    <form name="contactform" method="POST" autocomplete="off">
    <div class="col-sm-7" >
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control validate" id="name" name="name" placeholder="Name *" type="text" required>
        </div>
        
        <div class="form-group col-sm-4">
        <input class="form-control validate" type="tel" name="ph" id="ph" pattern="^\d{10}$" required  placeholder="Phone Number *" minlength="10" maxlength="10">
      </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email (optional)" type="email" >
        </div>

      </div>
      
      <textarea class="form-control" id="comments" name="comments" placeholder="Comments      /      Complaints   /       Technical Issues" rows="5"></textarea><br> 
      <div class="row" >
        <div class="col-sm-12 form-group center-block">
          <button class="btn btn-success pull-right btn-lg" id="submit" name="submit" type="submit">Send</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
<div class="row ">

<div class="col-sm-3"><img src="img/html.png " width="100%"></div>
<div class="container" style="width: 100%;background-color: black;color: white;">
  
 <h2 class="text-center " >Developers</h2>
 <div class="col-sm-3">
 
    <!-- normal -->
    <div class="ih-item circle effect1"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="img/ram2.jpg" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Ramanan R</h3>
            <p>Developer &nbsp;/&nbsp; UI Designer</p>
          </div>
        </div></a></div>
    <!-- end normal -->
 
  </div>
  <div class="col-sm-3">
 
    <!-- colored -->
    <div class="ih-item circle colored effect1"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="img/sur.jpg" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Suryan</h3>
            <p>Developer</p>
          </div>
        </div></a></div>
    <!-- end colored -->
 
  </div>
  
   <div class="col-sm-3">
 
    <!-- colored -->
    <div class="ih-item circle colored effect1"><a href="#">
        <div class="spinner"></div>
        <div class="img"><img src="img/thii.jpg" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Surya K</h3>
            <p>Developer</p>
          </div>
        </div></a></div>
    <!-- end colored -->
 </div>
  </div>
</div>
<div id="blank" style="height:0px;width:100%;"></div>
</section>
<!--======================================TOOL-TIP SCRIPT========================--> 
	<script type="text/javascript">
  $(function () 
  	{
  		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
<!--========================================AFFIX SCRIPT================================-->
<script type="text/javascript">
	$('[data-spy="affix"]').affix({
  offset: {
    top: 100,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})
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

<!--=======================================scrollfire script=============-->
<script type="text/javascript">//<![CDATA[ 
        $(function(){
            function onScrollInit( items, trigger ) {
                items.each( function() {
                var osElement = $(this),
                    osAnimationClass = osElement.attr('data-os-animation'),
                    osAnimationDelay = osElement.attr('data-os-animation-delay');
                  
                    osElement.css({
                        '-webkit-animation-delay':  osAnimationDelay,
                        '-moz-animation-delay':     osAnimationDelay,
                        'animation-delay':          osAnimationDelay
                    });

                    var osTrigger = ( trigger ) ? trigger : osElement;
                    
                    osTrigger.waypoint(function() {
                        osElement.addClass('animated').addClass(osAnimationClass);
                        },{
                            triggerOnce: true,
                            offset: '90%'
                    });
                });
            }

            onScrollInit( $('.os-animation') );
            onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
});//]]>  

    </script>
    
        <script type="text/javascript" src="js/sweetalert.js"></script>
<?php
include("contact_mail.php");
?>
</body>
</html>
