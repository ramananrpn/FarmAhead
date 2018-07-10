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
<title>Signup-Select</title>
<link rel="stylesheet" type="text/css" href="css/signup-select-css.css">
<link rel="stylesheet" type="text/css" href="css/bootstap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.4.css" >
<link rel="stylesheet" type="text/css" href="css/bootstap.theme.min.css">
<link rel="icon" type="image/png" href="../url logo/logo1.png" sizes="100*100">

<!-- <script src="bootstrap.min.js" type="text/javascript"></script> -->
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/prism.css">
<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
   <script src="js/ShakeBorder.js"></script>
      <link href="css/ShakeBorder-css.css" rel="stylesheet">
<style type="text/css">
	
</style>

<body class="img-responsive">
<!--================================NAVIGATION BAR============================-->
<div  class="container-fluid">
 	<div class="row ">
		<nav class="navbar navbar-inverse  navbar-fixed-top">
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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup-select.php" style="font-size: 20.5px;"  data-toggle="tooltip" data-placement="bottom"  title="Click to Sign Up "><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         <li class="dropdown" style="font-size: 20.5px;">
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
	<!--=================================TWO SIGNUP SELECT PNG IMG================================-->
	<div class="row-fluid">
  			<div class="col-md-3"></div>
  			<div class="col-md-3 " style="position: relative;margin-top: 220px;">
  				<a href="farmer-signup.php"><img src="img/farm.png " alt="" class="ShakeAndBorder" style="position: relative; height: 240px"></a>
<label><strong style="font-size: 20px;margin-left: -30px;">Farmer</strong> </label>
          </div>
  			
  			
  			<div class="col-md-4" style="position: relative;margin-top: 220px;">
  				<a href="consumer-signup.php"><img src="img/consumer.png " alt="" class="ShakeAndBorder"  style="position: relative; height: 280px"></a>
          <label><strong style="font-size: 20px;margin-left: -40px;">Consumer</strong> </label>
  			</div>
  	</div> 
	<!--======================================TOOL-TIP SCRIPT========================--> 
	<script type="text/javascript">
  $(function () 
  	{
  		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
<!--=============================SHAKING PLUGIN SCRIPT==========================================-->
<script>
      $('.ShakeAndBorder').ShakeBorder();
      $('.NoBorder').ShakeBorder({border:false});
      $('.Noshake').ShakeBorder({shake:false});
      </script>
</body>
</html>