 <?php
 session_start();
 header("Content-Type: text/html;charset=UTF-8");

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View-crop</title>
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
   

      <!-- SWEET ALERT  -->
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="engine0/style.css" />
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
 <header >
     <div class="row  navbar-fixed" >
    
     <nav style="background-color: #001a33;" >
    <div class="nav-wrapper ">
       <a class="navbar-brand left"  style="position: relative; top: -5px;left: 20px;" href="#"><img src="img/nav1.png" alt="Farmahead" height="30px;" width="155px; "></a>
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
      <a class="waves-effect waves-light btn-large"><i class="material-icons left">contacts</i>Account Settings</a>
      <a class="waves-effect waves-light btn-large"><i class="material-icons left">shopping_cart </i>Your Orders</a>
       <li><div class="divider"></div></li>
     <div> <a class="waves-effect waves-light btn-large" style="background-color:#ff1a1a;"  href="signout.php"><i class="material-icons left">power_settings_new</i>Sign out வெளியேறு</a></div>
      
    </ul>
        
  </div>
   </div>
   <div id="content">
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
   </header>
          
   <!--==================================   NAVBAR END   =========================================-->
   <main >

   <?php
    include("db-connection.php");
       mysqli_query($conn,"SET NAMES utf8;");  
   $sltcrop=mysqli_query($conn,"SELECT * from f_crops_stock where farmer_id = '".$_SESSION['fid']."'");
     // $sel = "SELECT * from f_crops_stock where farmer_id = '".$_SESSION['fid']."'";
    //  $result = $conn->query($sel);

   if(mysqli_num_rows($sltcrop)>0)
   //if($result->num_rows > 0)
   {
    $count=0;
    $i=0;

   while($sltcrop_res=mysqli_fetch_assoc($sltcrop))
   {    
        if (($count%5)==0) {
          echo'<div class="row">';
        
        }
        //$cname = $sltcrop_res['crop_name'];
  ?>
                  <!--Card-->

                    <div class="col-md-3 col-lg-3">
                    <div class="card card-product hoverable" style="height:350px;width:230px;">             
                        <!--Image-->
                        <div class="card-image waves-effect waves-block waves-light view overlay hm-white-slight">        
                              <img src="../<?php echo $sltcrop_res['img_url'] ?>" style="height:170px;width:300px;"/>
                                <div class="mask"> </div>
                            
                        </div>
                        <!--/.Image-->
                        <!--Card content: Name and price-->
                        <div class=" text-center">
                            <div class="">
                                <h5 class="product-title " style=" font-size:20px;">
                                      <?php echo $sltcrop_res['crop_name'];
                                     ?></h5>
                            </div>
                            <div class=" text-center" >
                                  <p style="background-color:yellow;">Quantity  :
                                  <?php echo $sltcrop_res['yield_qty']; ?>&nbsp;
                                  <?php 
                             echo $sltcrop_res['yield_qty_unit'] ;
                                   ?>  </p>
                            </div>
                            <div class="price">
                                <p class="green-text medium-500">Rs . 
                                <?php
                                echo $sltcrop_res['exp_price'];?>
                                &nbsp;<span class="discount light-300 red-text">per <?php 
                                echo $sltcrop_res['exp_price_unit']; ?>
                                </span></p>
                            </div>

                              
                        </div>
                        <!--/.Card content: Name and price-->

                        <!--HIDDEN PRODUCT ID TAG-->

                        
                          <input type="hidden" name="pid" id="pid" value="<?php echo $sltcrop_res['id'];?>">


                        <!--Buttons-->
                        <!--<div class="text-center">
                            <a href="#" class="btn btn-default waves-effect waves-light">Buy now</a>-->
                            <a href="#" class="btn waves-effect waves-light"  id="<?php echo $i ?>" name="" data-toggle="modal" data-target="#crop-alter" onclick="check(this.id,<?php echo $sltcrop_res['id'] ?>)" >View & Alter</a>
                        </div>

                        <!--/.Buttons-->

                      <!--AJAX ID FETCH DATA SCRIPT-->  
                      
                      <script type="text/javascript">
                      function check(b_id,prod_id)
                     {
                      obj = { "b_id":b_id, "prod_id":prod_id };
                      json_data = JSON.stringify(obj);
                      //alert(json_data);
                     var xmlhttp = new XMLHttpRequest();
                     
                     xmlhttp.onreadystatechange=function()
                     {
                      if (this.readyState == 4 && this.status == 200) 
                       {
                       var data= JSON.parse(xmlhttp.responseText);
                        //document.getElementById("abc").innerHTML = data.crop_name;
                          document.getElementById("title_name").innerHTML = data.crop_name;
                           document.getElementById("modal_qty").value = data.yield_qty;
                           document.getElementById("modal_ep").value = data.exp_price;
                           document.getElementById("modal_desc").value = data.description;
                           document.getElementById("modal_id").value = data.id;
                            /*document.getElementById("title_name").innerHTML = data.crop_name; document.getElementById("title_name").innerHTML = data.crop_name;*/
                        }

                     };
                     xmlhttp.open("GET","view_edit.php?x="+json_data,true);
                     xmlhttp.send();
                     }
                     
                    </script>  
                    <script type="text/javascript">
                      function modal_call(){

                      }

                    </script>
                    </div>
                    <!--/.Card-->
                    <!--======================ALTER MODAL=======================-->
                 

<div id="modal-display">
<div class="modal fade" id="crop-alter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color:rgba(242, 242, 242,0.1)">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
        

            <!--Header-->
            <div class="modal-header light-blue darken-1 white-text">
                
                <h5 class="title" id="title_name" name="title_name"></h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <br>
            <!--Body-->
            <div class="modal-body"> 
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="md-form form-sm">
                    <input type="hidden" name="modal_id" id="modal_id" >
                    <input type="text" id="modal_qty" min="1" name="modal_qty" class="form-control" value="0" style="font-size: 17px;" required>
                    <label for="modal_qty" style="font-size: 15px;">Available Quantity</label>
                </div>

                <div class="md-form form-sm">
                    
                    <input type="text" id="modal_ep" name="modal_ep" class="form-control" value="0" style="font-size: 15px;" required validate>
                    <label for="modal_ep" style="font-size: 15px;">Expected Price</label>
                </div>

                <div class="md-form form-sm">
                    
                    <input type="text" id="modal_desc" name="modal_desc" class="form-control" style="font-size: 15px;" value="0">
                    <label for="modal_desc" style="font-size: 15px;">Description</label>
                </div>

                <div class="text-center mt-2">
                    <button class="btn btn-info" type="submit" name="save">Save<i class="fa fa-sign-in ml-1"></i></button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
            <!--Footer-->
           
        </div>
        <!--/.Content-->
    </div>
</div>

</div>
<!--Modal: ALTER Form-->                                    
<!--===========================================================-->
<?php
                    $count++;
                    if(($count+1)%5==0){
                      echo '</div>';

                    }  
          $i++;
          }

        }

        else
            {
                 echo ' <h1 class="center" style="color: grey;opacity: 0.2;">No Crops Added</h1> ' ;
            }
          ?>

   </main>

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
</body>

</html>
<?php

  include("db-connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"]))
{
  $qty=$_POST["modal_qty"];
  $id=$_POST["modal_id"];
  $exp_price=$_POST["modal_ep"];
  $desc=$_POST["modal_desc"];


  mysqli_query($conn,"SET NAMES utf8;");   
  $update="UPDATE f_crops_stock SET yield_qty='".$qty."',exp_price='".$exp_price."',description='".$desc."'WHERE id='".$id."'" ;
  if (mysqli_query($conn,$update)) {
   echo '<script>
    setTimeout(function() {
        swal({
            title: "Crop ALtered!",
            text: "The Changes are Saved!",
            type: "success"
        }, function() {
            window.location = "view_crop_test.php";
        });
    });
</script>';

    }

  else{
    echo "FAILED TO UPDATE";
  }
}
?>