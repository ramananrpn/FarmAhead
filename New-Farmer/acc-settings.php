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
<title>Account-Settings</title>
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

<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
<link rel="stylesheet" type="text/css" href="engine0/style.css" />
<link rel="icon" type="image/png" href="../url logo/logo1.png" sizes="100*100">

<!--script type="text/javascript" src="engine0/jquery.js"></script-->
<!-- End WOWSlider.com HEAD section --></head>
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
/*SCROLL BAR WEBKIT*/
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
background: green;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
}

::-webkit-scrollbar-thumb:window-inactive {
background: #your-color;
}
/*CARD FLIP*/
/* entire container, keeps perspective */
.flip-container {
perspective: 1000px;
}
/* flip the pane when hovered */
.flip-container:hover .flipper, .flip-container.hover .flipper {
transform: rotateY(180deg);
}

.flip-container, .front, .back {
width: 320px;
height: 480px;
}

/* flip speed goes here */
.flipper {
transition: 0.6s;
transform-style: preserve-3d;

position: relative;
}

/* hide back of pane during swap */
.front, .back {
backface-visibility: hidden;

position: absolute;
top: 0;
left: 0;
}

/* front pane, placed above back */
.front {
z-index: 2;
/* for firefox 31 */
transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
transform: rotateY(180deg);
}
</style>
<body>
<!-- Start your project here-->
<header>
<div class="row  navbar-fixed">
<nav style="background-color: #001a33;" >
<div class="nav-wrapper ">
<a class="navbar-brand left"  style="position: relative; top: -5px;left: 20px;" href="index.php"><img src="img/nav1.png" alt="Farmahead" height="30px;" width="155px; "></a>
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
<a class="waves-effect waves-light btn-large" href="add-crop-ctg.php">Add Crops</a>
<a class="waves-effect waves-light btn-large" href="view_crop.php">View your Crops</a>
<!--<a class="waves-effect waves-light btn-large" >Schemes</a>
<a class="waves-effect waves-light btn-large"><i class="material-icons left">queue</i>Online Store</a>-->
<a class="waves-effect waves-light btn-large disabled" href="acc-settings.php"><i class="material-icons left">contacts</i>Account Settings</a>
<a class="waves-effect waves-light btn-large" href="your-orders.php"><i class="material-icons left">shopping_cart </i>Your Orders</a>
<li><div class="divider"></div></li>
<div> <a class="waves-effect waves-light btn-large" style="background-color:#ff1a1a;"  href="signout.php"><i class="material-icons left">power_settings_new</i>Sign out வெளியேறு</a></div>

</ul>        
</div>
</div>
<div id="content">
<a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
</div>
</header>

<div class="modal fade" id="resetpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title font-bold">Reset Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form name="resetform" method="POST" action="reset.php">
            <div class="modal-body">
                <div class="md-form">
                    <label for="pass">Current Password</label>
					<input type="password" id="pass" name="pass" maxlength="4" onclick="valid()" onkeyup="valid()" class="form-control validate" />
                </div>

                <div class="md-form">
                    <label for="cpass">New password</label>
					<input type="password" id="cpass" name="cpass" maxlength="4" onclick="valid()" onkeyup="valid()" class="form-control validate" />
                </div>
				<div class="md-form">
                    <label for="cpass">Confirm password</label>
					<input type="password" id="ccpass" name="ccpass" maxlength="4" onclick="valid()" onkeyup="valid()" class="form-control validate" />
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <input class="btn btn-default" type="submit" id="reset" name="reset" value="Reset" disabled="true" />
            </div>
			</form>
        </div>
    </div>
</div>

<!--=======================FORM HEADING=======================-->
<?php
$server = 'localhost';
$uname = 'root';
$pass = '';
$db = 'farmahead';
$conn = new mysqli($server,$uname,$pass,$db);
if(mysqli_connect_errno())
{
echo "Failed to connect";
}
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  first_name,pin,gender,address,city,phone FROM f_signup WHERE farmer_id = '" . $_SESSION['f_id'] . "'";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-8">
<?php $id=$rows['first_name']; ?>
<div class="row">
<div class="col-md-3">Name  :</div>
<div class="col-md-3"><input type="text" id="rname" name="rname" style="color:black" placeholder="<?php echo $rows['first_name']; ?>" value="<?php echo $rows['first_name']; ?>" disabled="true"/></div>
</div>
<div class="row">
<div class="col-md-3">Password</div>
<div class="col-md-4" ><input type="password" name="cpass" id="cpass" disabled="true" value="<?php echo $rows['pin']; ?>" placeholder="Enter Password"/></div>
<div class="col-md-4">
<div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#resetpass">Change Password</a>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">Phone   :</div>
<div class="col-md-3"><input type="text" id="rph" name="rph" style="color:black" placeholder="<?php echo $rows['phone']; ?>" value="<?php echo $rows['phone']; ?>" disabled="true"/></div>
</div>
<div class="row">
<div class="col-md-3">Address  :</div>
<div class="col-md-3"><input type="text" id="raddr" name="raddr" style="color:black" placeholder="<?php echo $rows['address']; ?>" value="<?php echo $rows['address']; ?>" disabled="true"/></div>
</div>

<div class="row">
<div class="col-md-3">City :</div>
<div class="col-md-3"><input type="text" id="rcity" name="rcity" style="color:black" placeholder="<?php echo $rows['city']; ?>" value="<?php echo $rows['city']; ?>" disabled="true"/></div>
</div>
<div class="row">
<div class="col-md-4"><a class="btn" href="edit_acc.php" >Edit</a></div>
</div>

<!--<div class="wt_99 left">-->
<!--<span class="td_1">About me</span>-->
<!--<span class="left"><?php //echo $rows[//'about_me']; ?></span>

</div>-->
</div>
</div>
</div>
<script type="text/javascript">
$('.button-collapse').sideNav({
menuWidth: 300, // Default is 300
edge: 'left', // Choose the horizontal origin
closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
draggable: true // Choose whether you can drag to open on touch screens
});
</script>
<script type="text/javascript">
    
    function valid()
    {
        var pass=document.forms["resetform"]["pass"].value;
        var cpass=document.forms["resetform"]["cpass"].value;
        var ccpass=document.forms["resetform"]["ccpass"].value;
        if(pass=="" || cpass=="" || ccpass=="" || cpass!=ccpass)
        {
            document.getElementById("reset").disabled=true;
        }
        else
            document.getElementById("reset").disabled=false;    
    }
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
