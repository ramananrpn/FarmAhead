 <?php
session_start();
if($_SESSION['lflag']==0)
  header("location:/../FarmAhead/FA - new/index.php");
header("Content-Type: text/html;charset=UTF-8");

  include("db-connection.php");
  $fid = $cr = $crid = $y = $yunit = $ep = $epunit = $org = ""; 

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && !empty($_POST))
{
    $fid=$_SESSION['f_id'];
    /*FETCHING CROP ID IMAGE URL*/
    $cr=$_POST["cr-name"];
    mysqli_query($conn,"SET NAMES utf8;");   
    $id="SELECT crop_id,img_url,EngName from coconut where crop = '$cr'";
    $run = mysqli_query($conn,$id);
    $crres=mysqli_fetch_assoc($run);
    /*.....*/
    /*FETCHING CATOGoRY AND ID*/
    $qctg="SELECT ctg_id , category from category where category LIKE 'coconut'";
    $res=mysqli_query($conn,$qctg);
      $obj=mysqli_fetch_assoc($res); 
    /*....*/
    if(mysqli_num_rows($run) > 0 && mysqli_num_rows($res) > 0)
    {
          
          $crid=$crres['crop_id'];
          $img=addslashes($crres['img_url']);
          $ctgid= $obj['ctg_id']; 
          $engname=$crres['EngName'];      
          $ctg=$obj['category'];
          $y=$_POST["y-qty"];
          $yunit=$_POST["y-qty-unit"];
          $ep=$_POST["exp_price"];
          $epunit=$_POST["exp_price-unit"];
          $org=$_POST["org"];
          $descp=$_POST["desc"];
          $q = "INSERT INTO f_crops_stock(farmer_id,ctg_id,category,crop_id,crop_name,yield_qty,yield_qty_unit,exp_price,exp_price_unit,organic,description,img_url,eng_name) VALUES ('".$fid."','".$ctgid."','".$ctg."','".$crid."','".$cr."',".$y.",'".$yunit."',".$ep.",'".$epunit."','".$org."','".$descp."','".$img."','".$engname."')";

          mysqli_query($conn,$q);
 
          if(mysqli_affected_rows($conn) > 0) //if($conn->query($q)===TRUE)
          {
            
            header("location:index.php");
          }
          else
      {
        echo "ERROR ";
      }
    }
    else{
      echo "SQL WRONG";
    }

}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form-Coconut</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">
    <!--Materialize css js jqury-->
  
<script src="js/materialize.min.js" type="text/javascript"></script>
 <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/jquery-2.1.1.min.js"></script>
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
   
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../url logo/logo1.png" sizes="100*100">
</head>
<style type="text/css">
body {
      position: relative;
      overflow-x: hidden;
      overflow-y: scroll; 
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
#container {
  padding-left: 300px;
}

#content {
  padding: 20px;
}
    
   /*SCROLL BAR WEBKIT*/
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
        background: blue;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }
    
    ::-webkit-scrollbar-thumb:window-inactive {
       background: #your-color;
    }
@media only screen and (max-width : 992px) {
  #container {
    padding-left: 0px;
  }
}
.dropsize {
    font-size: 20px;
    }
    .formlabel{
      font-size: 22px;
    }
   


</style>
<body background="img/restaurant.png"  >
 <header>
     <div class="row  navbar-fixed" >
    
     <nav style="background-color: #001a33;" >
    <div class="nav-wrapper ">
       <a class="navbar-brand left"  style="position: relative; top: -5px;" href="#"><img src="img/nav1.png" alt="Farmahead" height="30px;" width="155px; "></a>

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


     <a href="add-crop-ctg.php" class="waves-effect waves-light btn-large disabled" >Add Crops</  a>
      <a class="waves-effect waves-light btn-large" href="view_crop.php">View your Crops</a>
      <!--<a class="waves-effect waves-light btn-large" >Schemes</a>
      <a class="waves-effect waves-light btn-large"><i class="material-icons left">queue</i>Online Store</a>-->
      <a class="waves-effect waves-light btn-large" href="acc-settings.php"><i class="material-icons left">contacts</i>Account Settings</a>
      <a class="waves-effect waves-light btn-large" href="your-orders.php"><i class="material-icons left">shopping_cart </i>Your Orders</a>
       <li><div class="divider"></div></li>
     <div> <a class="waves-effect waves-light btn-large" style="background-color:#ff1a1a;"  href="signout.php"><i class="material-icons left">power_settings_new</i>Sign out வெளியேறு</a></div>
      
    </ul>

  </div>
   </div>
   <div id="content">
    <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
    
   </header>
   <!--==================================   NAVBAR END =====================================-->
   <!--=======================CENTER PAGE BLOCK===========================-->
    <span >   <button type="button" class="btn btn-info " id="backctg-btn" data-toggle="modal" data-target="#reqcrop" style="position: fixed;top: 80px;left: 0px; " data-placement="bottom" title="பயிர் பெயர் கூடுதலாக சேர்க்க  கோர கிளிக் செய்யவும் ">
Back to Category
</button> </span>
 <span>   <button type="button" class="btn btn-info " data-toggle="modal" data-target="#reqcrop" style="position: fixed;top: 80px;right: 0px;" data-placement="bottom" title="பயிர் பெயர் கூடுதலாக சேர்க்க  கோர கிளிக் செய்யவும் ">
Request Crop
</button> </span>
<div class="btn" style="color: white; position: fixed;top: 80px;right: 900px;"> <a href="add-crop-ctg.php" style="color: white">Back </a></div>

    <!--===============================REQUEST CROP MODAL========================-->
    <div class="modal fade" id="reqcrop" tabindex="-1" aria-labelledby="reqcropmes" aria-hidden="true" style="" style="opacity: 1px;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="reqcropmes">Add New Coconut Name</h4>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="form-group">
              <label for="recipient-name" class="form-control-label formlabel"><strong>New Coconut Name</strong></label>
              <input type="text" class="form-control" id="reqcoc" name="reqcoc" />
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;
          <button type="submit" class="btn btn-primary" id="send" name="send">Send</button>
        </div>
		</form>
      </div>
    </div>
  </div>

    <!--=================================                     =======================-->
        <div class="row"  >

        <div class="col m12 offset-m3 s12">
       
        <!--=======================FORM HEADING=======================-->
        <div>
        
        <h3 class="center col-sm-12 " style="margin-top: -40px;">Add Crop Form</h3><br>

         <p class="center col-sm-12 " style="margin-top: -30px;font-size: 25px;">தேங்காய்-Coconut</p> 

        </div><br>
        <!--=====================================FORM ================================-->
        
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >   

  <!--=====================CROP NAME=========================-->

          <div class=" center">
             
             <div class="row" >
             <div class="col-md-3"></div>
             <select class="browser-default dropsize col-md-6 col-sm-12" name="cr-name" id="cr-name">
    <option value="" disabled selected>--Choose your option--</option>
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
        mysqli_query($conn,"SET NAMES utf8;");
          $sql = "select * from coconut ";
          $query = mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($query)){
            echo '<option >'.$row['crop'].'</option>';
          }
      ?>
  </select>
  
  </div>
            </div>
<br>
  <!--=========================================QUANTITY ===================================--> 
          <div class="row ">
            <strong class="formlabel  col m8 s12" style="text-align: center;">Yield quantity &nbsp; விளைச்சல் அளவு *</strong>
          </div>
          <div class="row" style="margin-top: -20px;">
            <div class=" input-field col offset-m3  s5 ">
            <strong> <input id="y-qtyy" type="number" class="validate center" value="00" required style="background-color: rgba(242, 242, 242,0.5); font-color:green;" name="y-qty" min="1" max="999999" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" ></strong>
            </div>
            <div class="input-field dropsize col m0" required>
                            <select class="browser-default" id="y-qty-unit" required name="y-qty-unit" style="width: 130px;"  >
                              <option value="" selected disabled class="dropsize">--choose--</option>
                              <option value="Sack">Sack</option>
                              <option value="Ton">Ton</option>
                              <option value="Vehicle">vehicle</option>
                               <option value="Kilogram">Kilogram</option>
                            </select>
                            </div>
            </div>  <br>
<!--=========================================EXP PRICE ===================================-->  

             <div class="row ">

            <strong class="formlabel  col m8 s12" style="text-align: center;">Expected Price &nbsp; எதிர்பார்க்கப்படுகிற விலை *</strong>
          </div>

          <div class="row" style="margin-top: 0px;">
          <div class="col-md-3"></div>
            <div class=" input-field  col-md-3 col s6 ">
            <strong> 
            <label style="font-size: 20px;">Rs</label>
            <input id="texp_price" type="number" class="validate center" min="0" max="99999" required style="background-color: rgba(242, 242, 242,0.5);font-size: 20px;" name="exp_price"  onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" />

      <!--===========================LIMIT INPUT VALUE SCRIPT========================-->
                      <script type="text/javascript">
                        
                    function maxLengthCheck(object) {
                      if (object.value.length > object.max.length)
                        object.value = object.value.slice(0, object.max.length)
                    }
                      
                    function isNumeric (evt) {
                      var theEvent = evt || window.event;
                      var key = theEvent.keyCode || theEvent.which;
                      key = String.fromCharCode (key);
                      var regex = /[0-9]|\./;
                      if ( !regex.test(key) ) {
                        theEvent.returnValue = false;
                        if(theEvent.preventDefault) theEvent.preventDefault();
                      }
                    }
                      </script>
              <!--====================================================-->
            </strong>
            </div>
            <span><strong style="font-size: 20px;">Per</strong></span>
            <div class="input-field dropsize  col s5" required>
                            <select class="browser-default" id="texp_price-unit" required name="exp_price-unit" style="width: 130px;">
                              <option value="" selected disabled class="dropsize">--choose--</option>
                              <option value="Sack">Sack</option>
                              <option value="Ton">Ton</option>
                              <option value="Vehicle">vehicle</option>
                               <option value="Kilogram">Kilogram</option>                              
                            </select>
                            </div>
            </div>  <br>
<!--=========================ORGANIC====================================-->
            <div class="row" style="margin-top: -20px;">
                    
                     <strong class="formlabel  col m8 s1" style="text-align: center;">Organic Crop &nbsp; இயற்கை பயிர் *</strong></div>
                         <div class="row">
                          <div class="switch formlabel  col m8 s1" style="text-align: center;">
                            <label class="formlabel" style="color: black;">
                               No / இல்லை
                              <input type="checkbox" name="org" id="org" value="Yes">
                            
                              <span class="lever"></span>
                              ஆம் / Yes  
                            </label>
                             <input type="hidden" name="org" id="orgHidden" value="No" >
                             </div>
                             </div><br>
  <!--=====================Description=======================-->
    <div class="row">
    <strong class="formlabel  col m8 s1" style="text-align: center;">Description<br>உங்கள் பயிர் விளக்கம் (விரும்பினால்)</strong>
    </div>
    <div class="row">
    <div class="col-md-3"></div>
          <div class="input-field col-md-6">
            <textarea id="desc" class="materialize-textarea" style="color: black;font-size: 20px;background-color: rgba(242, 242, 242,0.5);" name="desc"></textarea>
        
          </div>
        </div>
<!--===========================CHECKBOX VALUE SCRIPT========================--> 
              <script type="text/javascript">
              function checkbox()
              {
                if (document.getElementById("org").checked) {
                  document.getElementById('orgHidden').disabled=true;

                }
              }
              </script>                              
  <!--======================================-->                           
                          </div>
                    </div>
                      <div class="row ">
                      <div class="col-md-3"></div>
                      <div class="center-block">
                        <button class="btn btn-large waves-effect waves-light" type="button" name="add" id="add" onclick="checkbox()" data-toggle="modal" data-target="#confirm-submit"><p style="font-size: 19px;">ADD</p></button>
                        </div>
                    </div>
                    <!--================================SUBMIT COMFIRM MODAL======================-->
    <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                Are you sure you want to submit the following details?
                <table class="table">
                    <tr>
                        <th>பயிர் பெயர் </th>
                        <td id="cname"></td>
                    </tr>
                    <tr>
                        <th> விளைச்சல் அளவு </th>
                        <td id="tqty"></td> <td id="tqty-u"></td>
                    </tr>
                    <tr>
                        <th> எதிர்பார்க்கப்படுகிற விலை </th>
                        <td id="tprice"></td><td id="tprice-u"></td>
                    </tr><tr>
                        <th> இயற்கை பயிர்</th>
                        <td id="torg"></td>
                    </tr>
                    </tr><tr>
                        <th> பயிர் விளக்கம்</th>
                        <td id="tdis"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-success success" name="submit" id="submit">Submit</button>
            </div>
        </div>
    </div>
</div>
          </form>
        </div>
        </div>
        <script type="text/javascript">
          $('#add').click(function() {
     $('#cname').text($('#cr-name').val());
     $('#tqty').text($('#y-qtyy').val());
      $('#tqty-u').text($('#y-qty-unit').val());
       $('#tprice').text($('#texp_price').val());
        $('#tprice-u').text($('#texp_price-unit').val());
        if (document.getElementById("org").checked) {
         $('#torg').text($('#org').val());
       }
        else{
           $('#torg').text($('#orgHidden').val());
        }
        $('#tdis').text($('#desc').val());
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

    
 <!--======================================TOOL-TIP SCRIPT========================--> 
  <script type="text/javascript">
  $(function () 
    {
      $('[data-toggle="tooltip"]').tooltip()
  })
</script>
 
</body>
</html>
<?php
include("reqaddcoc.php");
?>
