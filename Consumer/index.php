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
    
    <script type="text/javascript" src="js/mdb.js"></script>
<style type="text/css">
 body {
      position: relative;
      overflow-x: hidden;
      overflow-y: scroll; 
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
        background: ;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }
    
    ::-webkit-scrollbar-thumb:window-inactive {
       background: #your-color;
    }
    .pulse{
      overflow:initial;
      position:relative
          }
    .pulse::before{
      content:'';display:block;position:absolute;width:100%;height:100%;top:0;left:0;background-color:inherit;border-radius:inherit;transition:opacity .3s, -webkit-transform .3s;transition:opacity .3s, transform .3s;transition:opacity .3s, transform .3s, -webkit-transform .3s;-webkit-animation:pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;animation:pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;z-index:-1}@-webkit-keyframes pulse-animation{0%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}50%{opacity:0;-webkit-transform:scale(1.5);transform:scale(1.5)}100%{opacity:0;-webkit-transform:scale(1.5);transform:scale(1.5)}}@keyframes pulse-animation{0%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}50%{opacity:0;-webkit-transform:scale(1.5);transform:scale(1.5)}100%{opacity:0;-webkit-transform:scale(1.5);transform:scale(1.5)}
        }
    /*CARD SIZE */
    .card-size{
      height: 350px;
      width: 320px;
    }
    .card-img{
      height: 290px;
      width: 320px;
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
                 <ul class="nav navbar-nav navbar-right smooth-scroll mr-auto" style="height: 5px;">
                             
                   <a class="btn btn-floating btn-large blue " href="acc_settings.php"><i class="material-icons">settings</i></a>
                    <li class="nav-item " >
                   <a  ><i class="material-icons left">person_pin</i><?php

                    echo ucwords($_SESSION['c_un']);

                      ?>
                  </a> 
                    </li>
                     
<a class="btn btn-floating btn-large red" href="signout.php"><i class="material-icons">settings_power</i></a>
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

        <div class="row " style=" background: url('img/563.jpg');
    background-size: 100% 720px; width:xxpx;
    height:670px;
    background-repeat: no-repeat;">
    <div class="row">
 
        <div class="col-lg-4 col-md-4  col-sm-2 col-xs-0 center-block"></div>
        <a class="btn btn-floating btn-large cyan pulse " href="view_cart.php" style="position: fixed;right:50px;top: 100px; z-index: 999999px;height: 70px;width: 70px;"><i class="material-icons" style="top: 117px;position: fixed;right: 59px;">shopping_basket</i></a>

        <div class=" jumbotron  z-depth-2 col-lg-5 col-md-5 col-xs-12 col-sm-8" style="margin-top: 200px; background-color:   #1a1a1a;opacity: 0.7;margin-left: -30px;" >
        <strong style="font-size: 30px;color: white;"> WELCOME <br> TO <br>FarmAhead Online Store</strong> 
        </div>
        </div>
          <!-- Button trigger modal -->
          <div class="row">
<a class="btn btn-primary btn-lg " href="view_cart.php" style="z-index: ;">
   <i class="material-icons left">shopping_cart</i>
    <span >Open my cart</span><span class="badge social-counter"></span>
</a>
</div>
<!--<span class="counter">4</span>-->
        </div>
        
       


       <div class="row" style="background-color: ;" id="store">
         <!--Section: Products v.4-->
<section class="section">

    <!--Section heading-->
    <h1 class="section-heading" >Category</h1>
    <!--Section sescription-->
    <p class="section-description">Choose any one of the category in which you want to buy/order the crop you Want</p>

    <!--First row-->
    <div class="row " >
   
    <a href="cons-vege.php">
            <div class="col-md-3 col-sm-3" >
            <!--Card-->
                <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size">
                    <!--Card image-->
                    <img src="vege.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="card-footer rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text" ><h5 class="h5-responsive ">Vegetables    <i class="material-icons">chevron_right</i></h5></a>
                        <!--Card details-->
                    </div>
                </div>
                <!--/.Card-->
            </div>
            </a>
                <a href="cons-fruits.php">
            <div class="col-md-3 col-sm-3">
               <!--Card-->
                <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size">
                    <!--Card image-->
                    <img src="img/frits.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="card-footer rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Fruits <i class="material-icons">chevron_right</i></h5></a>
                        <!--Card details-->
                    </div>
                </div>
                <!--/.Card-->
            </div>
            </a>
            <a href="cons-flowers.php">
             <div class="col-md-3 col-sm-3">
               <!--Card-->
                <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size">
                    <!--Card image-->
                    <img src="img/558.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="card-footer rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Flowers <i class="material-icons">chevron_right</i></h5></a>
                        <!--Card details-->
                    </div>
                </div>
                <!--/.Card-->
            </div>
            </a>
            <a href="keerai.php">
             <div class="col-md-3 col-sm-3">
               <!--Card-->
                <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size ">
                    <!--Card image-->
                    <img src="img/keerai.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="card-footer rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Spinach<i class="material-icons">chevron_right</i></h5></a>
                        <!--Card details-->
                    </div>
                </div>
                <!--/.Card-->
            </div>
            </a>
        

        </div>
         <br>
        <div class="row">
        <section class="section" >
 <h3 class="section-heading   col-sm-12" style="text-align: center;">Coconut</h3>
  <!--Section sescription-->
    <p class="section-description"></p>
 </section></div>
 <br>
          <div class="col-md-3"></div>
           <div class="col-md-3 col-sm-3">
               <!--Card-->
               <a href="form-coc_water.php">
                  <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size">
                    <!--Card image-->
                    <img src="img/coc.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Coconut(இளநீர்)  <i class="material-icons">chevron_right</i></h5></a>
                        <!--Card details-->
                    </div>
                </div>
                </a>
                <!--/.Card-->
            </div>

            <div class="col-md-3 col-sm-3">
               <!--Card-->
               <a href="form-coconut.php"> 
                 <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size">
                    <!--Card image-->
                    <img src="img/123.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Coconut <i class="material-icons">chevron_right</i></h5></a>
                    </div>
                </div>
                <!--/.Card-->
                </a>
            </div>

             
        </div>
        <br>
        <div class="row">
        <section class="section">
 <h3 class="section-heading center  col-sm-12" style="text-align: center;">Raw Product Crops</h3>
  <!--Section sescription-->
    <p class="section-description"></p>
 </section></div>
 <br>
          <div class="col-md-2"></div>
           <div class="col-md-3 col-sm-3 ">
               <!--Card-->
               <a href="cons-rice.php">
                 <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size">
                    <!--Card image-->
                    <img src="img/padddy.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">Paddy / நெல் <i class="material-icons">chevron_right</i></h5></a>
                        <!--Card details-->
                    </div>
                </div>
              </a>
                <!--/.Card-->
            </div>

            <div class="col-md-3 col-sm-3">
               <!--Card-->
               <a href="cons-sugarcane.php">
                 <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size">
                    <!--Card image-->
                    <img src="img/ssss.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">கரும்பு
 / Sugarcane <i class="material-icons">chevron_right</i></h5></a>
                        <!--Card details-->
                    </div>
                </div>
              </a>
                <!--/.Card-->
            </div>

              <div class="col-md-3 col-sm-3">
               <!--Card-->
               <a href="cons-tumeric.php">
                 <div class="collection-card hoverable view overlay hm-zoom z-depth-3 card-size">
                    <!--Card image-->
                    <img src="img/turmeric.jpg" class="img-responsive card-img">
                    <div class="mask"></div>
                    <!--Card footer-->
                    <div class="rgba-white-strong">
                        <!-- Title -->
                        <a href="" class="black-text"><h5 class="h5-responsive">மஞ்சள்  / Turmeric <i class="material-icons">chevron_right</i></h5></a>
                        <!--Card details-->
                    </div>
                </div>
              </a>
                <!--/.Card-->
            </div>
        </div>
        </div>

        
</section>
  


       </div>

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
<!--========================SCROLLSPY SMOOTH SCROLL ANIM SCRIPT============================-->
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

   

</body>

</html>