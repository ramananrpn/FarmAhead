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
    <title>Account Settings</title>
	
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
                     
<a class="btn btn-floating btn-large red " href="signout.php"><i class="material-icons">settings_power</i></a>
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

$sql = "SELECT  * FROM consumer_signup WHERE cons_id = '" . $_SESSION['c_id'] . "'";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);
?>
<div class="table" style="position:fixed; top:100px;margin-top: 10px;">
  <center><h3>Account Settings</h3></center>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php $id=$rows['username']; ?>
<div class="row">
<br/>
</div>
<form name="acc_cform" method="POST" action="update.php">
<div class="row">
<div class="col-md-4">Name  :</div>
<div class="col-md-6"><input type="text" id="rname" name="rname" style="color:black" placeholder="<?php echo $rows['username']; ?>" value="<?php echo $rows['username']; ?>" /></div>
</div>
<div class="row">
<div class="col-md-4">Phone   :</div>
<div class="col-md-6"><input type="text" id="rph" name="rph" style="color:black" placeholder="<?php echo $rows['phone']; ?>" value="<?php echo $rows['phone']; ?>" /></div>
</div>
<div class="row">
<div class="col-md-4">Email  :</div>
<div class="col-md-6"><input type="text" id="remail" name="remail" style="color:black" placeholder="<?php echo $rows['email']; ?>" value="<?php echo $rows['email']; ?>" /></div>
</div>

<div class="row">
<div class="col-md-4">City :</div>
<div class="col-md-6">
<select class="form-control" id="rcity" name="rcity" required data-toggle="tooltip"  data-placement="bottom"  title="நகரம்" style="height: 45px;width: 230px;color: rgb(116, 127, 139)">
    <option value="Ariyalur" <?php if($rows['city'] == 'Ariyalur') echo 'selected="selected"';?>>Ariyalur</option>
    <option value="Chennai" <?php if($rows['city'] == 'Chennai') echo 'selected="selected"';?>>Chennai</option>
    <option value="Coimbatore" <?php if($rows['city'] == 'Coimbatore') echo 'selected="selected"';?>>கோயம்புத்தூர்/Coimbatore</option>
    <option value="Cuddalore" <?php if($rows['city'] == 'Cuddalore') echo 'selected="selected"';?>>Cuddalore</option>
    <option value="Dharmapuri" <?php if($rows['city'] == 'Dharmapuri') echo 'selected="selected"';?>>Dharmapuri</option>
    <option value="Dindigul" <?php if($rows['city'] == 'Dindigul') echo 'selected="selected"';?>>Dindigul</option>
    <option value="Erode" <?php if($rows['city'] == 'Erode') echo 'selected="selected"';?>>Erode</option>
    <option value="Kancheepuram" <?php if($rows['city'] == 'Kancheepuram') echo 'selected="selected"';?>>Kancheepuram</option>
    <option value="Kanyakumari" <?php if($rows['city'] == 'Kanyakumari') echo 'selected="selected"';?>>Kanyakumari</option>
    <option value="Karur" <?php if($rows['city'] == 'Karur') echo 'selected="selected"';?>>Karur</option>
    <option value="Krishnagiri" <?php if($rows['city'] == 'Krishnagiri') echo 'selected="selected"';?>>Krishnagiri</option>
    <option value="Madurai" <?php if($rows['city'] == 'Madurai') echo 'selected="selected"';?>>Madurai</option>
    <option value="Nagapattinam" <?php if($rows['city'] == 'Nagapattinam') echo 'selected="selected"';?>>Nagapattinam</option>
    <option value="Namakkal" <?php if($rows['city'] == 'Namakkal') echo 'selected="selected"';?>>Namakkal</option>
    <option value="Perambalur" <?php if($rows['city'] == 'Perambalur') echo 'selected="selected"';?>>Perambalur</option>
    <option value="Pudukottai" <?php if($rows['city'] == 'Pudukottai') echo 'selected="selected"';?>>Pudukottai</option>
    <option value="Ramanathapuram" <?php if($rows['city'] == 'Ramanathapuram') echo 'selected="selected"';?>>Ramanathapuram</option>
    <option value="Salem"<?php if($rows['city'] == 'Salem') echo 'selected="selected"';?>>Salem</option>
    <option value="Sivaganga" <?php if($rows['city'] == 'Sivaganga') echo 'selected="selected"';?>>Sivaganga</option>
    <option value="Thanjavur" <?php if($rows['city'] == 'Thanjavur') echo 'selected="selected"';?>>Thanjavur</option>
    <option value="The Nilgiris"<?php if($rows['city'] == 'The Nilgiris') echo 'selected="selected"';?>>The Nilgiris</option>
    <option value="Theni" <?php if($rows['city'] == 'Theni') echo 'selected="selected"';?>>Theni</option>
    <option value="Thiruvallur"<?php if($rows['city'] == 'Thiruvallur') echo 'selected="selected"';?>>Thiruvallur</option>
    <option value="Thiruvannamalai" <?php if($rows['city'] == 'Thiruvannamalai') echo 'selected="selected"';?>>Thiruvannamalai</option>
    <option value="Thiruvarur" <?php if($rows['city'] == 'Thiruvarur') echo 'selected="selected"';?>>Thiruvarur</option>
    <option value="Thirunelveli" <?php if($rows['city'] == 'Thirunelveli') echo 'selected="selected"';?>>Thirunelveli</option>
    <option value="Tiruppur"<?php if($rows['city'] == 'Tiruppur') echo 'selected="selected"';?>>Tiruppur</option>
    <option value="Trichirappalli" <?php if($rows['city'] == 'Trichirappalli') echo 'selected="selected"';?>>Trichirappalli</option>
    <option value="Tuticorin" <?php if($rows['city'] == 'Tuticorin') echo 'selected="selected"';?>>Tuticorin</option>
    <option value="Vellore" <?php if($rows['city'] == 'Vellore') echo 'selected="selected"';?>>Vellore</option>
    <option value="Villupuram" <?php if($rows['city'] == 'Villupuram') echo 'selected="selected"';?>>Villupuram</option>
    <option value="Virudhunagar" <?php if($rows['city'] == 'Virudhunagar') echo 'selected="selected"';?>>Virudhunagar</option>
  </select>
</div>
</div>
<br><br>
<div class="row">
<div class="col-md-4"><input type="submit" id="edit" name="edit" class="btn btn-default" value="Confirm" /></div>
<div class="col-md-4"><a class="btn btn-default" href="acc_settings.php" >Cancel</a></div>
</div>

<!--<div class="wt_99 left">-->
<!--<span class="td_1">About me</span>-->
<!--<span class="left"><?php //echo $rows[//'about_me']; ?></span>

</div>-->
</form>
</div>
</div>
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