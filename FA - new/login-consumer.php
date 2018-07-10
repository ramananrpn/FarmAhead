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
<title>Login-Consumer</title>
<link rel="stylesheet" type="text/css" href="css/new-cons-login-css.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
<style type="text/css">
   body {
      position: relative;
      overflow-x: hidden;
      overflow-y: hidden; 
  }
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
        <!--<li><a href="#" style="font-size: 20.5px;">Services</a></li>    
        <li><a href="#" style="font-size: 20.5px;">Feedback</a></li>
        <li><a href="#" style="font-size: 20.5px;">Contact Us</a></li>-->
      </ul>
    <<ul class="nav navbar-nav navbar-right">
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

        <div class="login-form">
            <h1>Welcome! Please Sign In</h1><br>
           
        <form name="login-form" method="POST" action="php-consumer.php">
       
          <li>
           <div class="form-input">
            <input type="text"  class="text validate" value="Email" onfocus="this.value = '';"  onblur="if (this.value == '') {this.value = 'Email';}" id="email"  name="email" onkeyup="validation()"required="required"><a href="#" class=" icon user" ></a>
            </div>
          </li>
          <li>
          <div class="form-input">
            <input type="password" class="validate" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" id="pass" name="pass" onkeyup="validation()" required maxlength="10">
            <a href="#" class=" icon lock" ></a>
          </div>
          </li>
          
           <div class ="forgot">
            <h3><a href="#">Forgot Password?</a></h3>
            <input type="submit" id="submit" name="submit" disabled="true" value="Sign In" > <a href="#" class=" icon arrow"></a>                                                                                                                                                                                                                               
          </div>
        </form>
        
      </div>
      <!--//End-login-form-->
          
<!--====================================LOGIN FORM END===========================-->
<script type="text/javascript">
  
function validation()
{
  var email=document.forms["login-form"]["email"].value;
  var pass=document.forms["login-form"]["pass"].value;
  var atpos=email.indexOf("@");
  var dotpos=email.lastIndexOf(".");
  if(atpos<1 || dotpos<(atpos+2) || dotpos+2>=email.length || pass=="")
  {
      document.getElementById("submit").disabled=true;
  }
  else
  {
      document.getElementById("submit").disabled=false;
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

  </body>
</html>