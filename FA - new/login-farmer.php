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
<title>Login-Farmer</title>
<link rel="stylesheet" type="text/css" href="css/farmer-login-css.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/bootstap.theme.min.css">
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
<style type="text/css">
  

</style>
<body class="img-responsive">
<!--================================================NAVBAR============================================--> 
 		<div  class="container-fluid">
 	<div class="row ">
		<nav class=" navbar-inverse navbar-fixed-top" >
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
      <!-- <li><a href="#" style="font-size: 20.5px;">Services</a></li>
        <li><a href="#" style="font-size: 20.5px;">Feedback</a></li>-->
        <!--<li><a href="index.php" style="font-size: 20.5px;">Contact Us</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup-select.php" style="font-size: 20.5px;"  data-toggle="tooltip" data-placement="bottom"  title="Click to Sign Up "><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         <li class="dropdown active" style="font-size: 20.5px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#S"  aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="bottom"  title="Click to Login "><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
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
  <!--=================================END TOP-NAVBAR================================-->

  <!--==============================FARMER LOGIN FORM==================================-->
  <div class="row">
  <div class=" col-lg-3 col-md-3  col-sm-2 col-xs-0 "></div>
    <div class="container col-lg-6 col-md-6 col-xs-12 col-sm-8">
  <img src="img/farm.png" style=" height: 160px;width: 160px;">
    <form id="login-form" name="login-form" action="php-login_farmer.php" method="POST">
      <div class="form-input ">
       <span class="glyphicon glyphicon-earphone" style="font-size: 22px; color: white; padding-right: 10px;"></span>
        <input type="text" id="uid" name="uid" placeholder="தொலைபேசி எண் / Phone " minlength="10" maxlength="10" onkeyup="validatephone(this);" required>
      </div>
      <div class="form-input">
      <span class="glyphicon glyphicon-lock" style="font-size: 22px; color: white; padding-right: 10px;"></span>
        <input type="password" id="pass" name="pass" placeholder="Password" onkeyup="validation()" maxlength="4" minlength="4" required>
      </div>
      <input type="submit" id="submit" name="submit" value="LOGIN" class="btn-login" disabled="true" />
      <br><br>
      <a href="#" style="color: white;">Forgot password?</a>
    </form>
  </div>
  <div class=" col-lg-3 col-md-3   col-sm-2"></div>
  </div>
</div>
<!--====================================LOGIN FORM END===========================-->
<script type="text/javascript">
function validation()
{
  var uid=document.forms["login-form"]["uid"].value;
  var pass=document.forms["login-form"]["pass"].value;
  var pattern=/^[7|8|9]\d{9}$/; 
  if(!uid.match(pattern) || pass=="")
  {
    document.getElementById("submit").disabled=true;
  }
  else
  {
    document.forms["login-form"]["submit"].disabled=false;
  }
}
</script>
  <!--======================================TOOL-TIP SCRIPT========================--> 
	<script type="text/javascript">
  $(function () 
  	{
  		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
<script type="text/javascript">
  function validatephone(phone)
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|` ¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
    validation();
}
</script>
  </body>
</html>