<!doctype html>
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

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<title>Signup-consumer</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-flex.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.4.css" >
<link rel="stylesheet" type="text/css" href="css/bootstap.theme.min.css">
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="../url logo/logo1.png" sizes="100*100">
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="css/consumer.min.css">
  <!-- jQuery Library -->

  <!--materialize js-->
  <script src="js/materialise.js"></script>
<style type="text/css">
  /*Custom fonts - Sniglet and FontAwesome*/
.color{
  color: black;
  font-color:black;
}

* {margin: 0; padding: 0;}
body {

  height: 100%;
  background: 
    /*linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)), */
    url("img/ss.jpg");
    background-repeat: no-repeat;
  background-size: 100% 920px;
  padding-top: 90px;
  font: normal 18px ; color: white; text-align: center;
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
<body class="img-responsive">

<!--================================NAVIGATION BAR============================-->

<div  class="container-fluid">
  <div class="row ">
    <nav class=" navbar-inverse  navbar-fixed-top">
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
        <li class="" style="font-size: 20.5px;"><a href="index.php">Home </a></li>
        <!--<li class="dropdown" style="font-size: 20.5px;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#S" >Services</span></a>
          <ul class="dropdown-menu" style="font-size: 20.5px;">
            <li><a href="#Services">Buy</a></li>
            <li><a href="#">Sell</a></li>
            <li><a href="#">Guidance</a></li>
          </ul>
        </li>-->
       <!-- <li><a href="#" style="font-size: 20.5px;">Feedback</a></li>-->
        <!--<li><a href="#" style="font-size: 20.5px;">Contact Us</a></li>-->
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup-select.php" style="font-size: 20.5px;"  data-toggle="tooltip" data-placement="bottom"  title="Click to Sign Up "><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         <li class="dropdown" style="font-size: 20.5px;" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#S"   aria-haspopup="true" aria-expanded="false" ><span class="glyphicon glyphicon-log-in"></span> Login</a>
               <ul class="dropdown-menu" style="font-size: 20.5px;">
            <li ><a href="login-farmer.php" >  <img src="img/farm.png" style=" height: 30px;width: 30px;" data-toggle="tooltip" data-placement="left"  title="Click to Login as Farmer ">&nbsp;Farmer</a></li>
            <li><a href="login-consumer.php">  <img src="img/consumer.png" style=" height: 30px;width: 30px;">&nbsp;Consumer</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>
  </div>
  <!--=================================END TOP-NAVBAR================================-->
  <div class="row" style="position: relative; top: -30px; ">

  <div class="container col-lg-4 col-md-4 col-xs-10 col-sm-10" style="background-color: rgba(217, 217, 217,0.5);padding-bottom: -40px;">
   <div id="login-page" class="row">
    <div class="col s12 ">
      <form class="login-form" name="cform" autocomplete="off" action="php-consumer_signup.php" method="POST">
        <div class="row">
          <!--<div class="input-field  center">
            <img src="img/market.png" alt="" class="responsive-img valign profile-image-login">
           
          </div>-->
        </div>
        <div class="row ">
          <div class="input-field center-block ">
            <i class=" prefix"></i>
            <input id="username" name="uname" type="text" class="validate" onclick="cvalid()" onkeyup="cvalid()" >
            <label for="username" id="ulabel" class="center-align color" style="color: white;">Username</label>
          </div>
        </div>
        <div class="row ">
          <div class="input-field center-block">
            <i class=" prefix"></i>
            <input id="email" type="email" name="email" class="validate" onclick="cvalid()" onkeyup="cvalid()" >
            <label for="email" id="elabel" class="center-align" style="color: white;">Email</label>
          </div>
        </div>
          <div  class="row ">
          <div class="input-field center-block ">
            <i class=" prefix"></i>
            <input id="num" type="tel" class="validate" name="ph" onclick="cvalid()" onkeyup="validphone(this)" maxlength="10">
            <label for="num" id="nlabel" class="center-align color" style="color: white;">Phone Number</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field center-block">
            <i class=" prefix"></i>
            <input id="pass" type="password" name="pass" onclick="cvalid()" onkeyup="cvalid()" class="validate">
            <label for="password" id="plabel" style="color: white;">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field center-block">
            <i class=" prefix"></i>
            <input id="cpass" name="cpass" onclick="cvalid()" onkeyup="cvalid()" type="password"  class="validate">
            <label for="cpass" id="cplabel" style="color: white;">Re-type password</label>
          </div>
        </div>
         <div class="row">
          <div class="input-field center-block">
            <i class=" prefix"></i>
  <select class="form-control" id="city" name="city" onclick="cvalid()" onkeyup="cvalid()" required title="நகரம்" style="position:relative; left:50px; opacity:0.7; height:45px; width:250px; color:rgb(0,0,0)">
    <option disabled="" selected="" value="">City</option>
    <option value="Ariyalur">Ariyalur</option>
    <option value="Chennai">Chennai</option>
    <option value="Coimbatore">Coimbatore</option>
    <option value="Cuddalore">Cuddalore</option>
    <option value="Dharmapuri">Dharmapuri</option>
    <option value="Dindigul">Dindigul</option>
    <option value="Erode">Erode</option>
    <option value="Kancheepuram">Kancheepuram</option>
    <option value="Kanyakumari">Kanyakumari</option>
    <option value="Karur">Karur</option>
    <option value="Krishnagiri">Krishnagiri</option>
    <option value="Madurai">Madurai</option>
    <option value="Nagapattinam">Nagapattinam</option>
    <option value="Namakkal">Namakkal</option>
    <option value="Perambalur">Perambalur</option>
    <option value="Pudukottai">Pudukottai</option>
    <option value="Ramanathapuram">Ramanathapuram</option>
    <option value="Salem">Salem</option>
    <option value="Sivaganga">Sivaganga</option>
    <option value="Thanjavur">Thanjavur</option>
    <option value="The Nilgiris">The Nilgiris</option>
    <option value="Theni">Theni</option>
    <option value="Thiruvallur">Thiruvallur</option>
    <option value="Thiruvannamalai">Thiruvannamalai</option>
    <option value="Thiruvarur">Thiruvarur</option>
    <option value="Thirunelveli">Thirunelveli</option>
    <option value="Tiruppur">Tiruppur</option>
    <option value="Trichirappalli">Trichirappalli</option>
    <option value="Tuticorin">Tuticorin</option>
    <option value="Vellore">Vellore</option>
    <option value="Villupuram">Villupuram</option>
    <option value="Virudhunagar">Virudhunagar</option>
  </select>
          </div>
          </div>
        <div class="row">
          <div class="input-field center-block">
            <button id="reg" name="reg" class="btn waves-effect waves-light col s12 center-block " id="action" disabled="true" name="action" type="submit" style="left: 120px; " >Register Now</button>
          </div><br>
          </div>
          <div class="row">
          <!--<div class="input-field center-block">
            <p class="margin center medium-small sign-up center-block text-center">Already have an account? <a href="login.html">Login</a></p>
          </div>-->
          </div>
       
      </form>
    </div>
  </div>
</div>
</div>

 <!--======================================TOOL-TIP SCRIPT========================--> 
  <script type="text/javascript">
  $(function () 
    {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<!--=====================FORM SCRIPT===========================-->
<script type="text/javascript">
var password = document.getElementById("pass")
  , confirm_password = document.getElementById("cpass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<!--==================================FARMERID SCRIPT ================================-->
<script type="text/javascript">
  var far_id=document.getElementById("fid").value;
alert(far_id);
</script>
<script type="text/javascript">
  function validphone(phone)
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+')
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|` ¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
    cvalid();
}

function cvalid()
{
var user =document.forms["cform"]["username"].value;
var email =document.forms["cform"]["email"].value;
var num =document.forms["cform"]["num"].value;
var city =document.forms["cform"]["city"].value;
var pass =document.forms["cform"]["pass"].value;
var cpass =document.forms["cform"]["cpass"].value;
var ebol=true;
var atpos=email.indexOf("@");
  var dotpos=email.lastIndexOf(".");
  if(atpos<1 || dotpos<(atpos+2) || dotpos+2>=email.length)
  {
      ebol=false;
  }
if(user!="" && ebol==true && num!="" && city!="" && pass!="" && cpass!="" && pass==cpass)
{
  document.getElementById("reg").disabled=false;
}
else
{
  document.getElementById("reg").disabled=true;
}

}

</script>
</body>
</html>

