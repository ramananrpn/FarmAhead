<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome-Consumer</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/cart.js"></script>
 </head>
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
@font-face {
              font-family: 'lsr';
              src: url(fonts/LoveStoryRough.ttf);
              }
    .mynewfont {
                font-family: 'lsr';
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
    .pulse{
      overflow:initial;
      position:relative
          }
    .pulse::before{
      content:'';display:block;position:absolute;width:100%;height:100%;top:0;left:0;background-color:inherit;border-radius:inherit;transition:opacity .3s, -webkit-transform .3s;transition:opacity .3s, transform .3s;transition:opacity .3s, transform .3s, -webkit-transform .3s;-webkit-animation:pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;animation:pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;z-index:-1}@-webkit-keyframes pulse-animation{0%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}50%{opacity:0;-webkit-transform:scale(1.5);transform:scale(1.5)}100%{opacity:0;-webkit-transform:scale(1.5);transform:scale(1.5)}}@keyframes pulse-animation{0%{opacity:1;-webkit-transform:scale(1);transform:scale(1)}50%{opacity:0;-webkit-transform:scale(1.5);transform:scale(1.5)}100%{opacity:0;-webkit-transform:scale(1.5);transform:scale(1.5)}
        }

/* DROPDOWN */
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);

body {
  
  color: #414141;
  font: 400 17px/2em 'Source Sans Pro', sans-serif;
}

.select-box {
  cursor: pointer;
  position : relative;
  max-width:  20em;
  margin: 5em auto;
  width: 100%;
}

.select,
.label {
  color: #414141;
  display: block;
  font: 400 17px/2em 'Source Sans Pro', sans-serif;
}

.select {
  width: 100%;
  position: absolute;
  top: 0;
  padding: 5px 0;
  height: 40px;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  background: none transparent;
  border: 0 none;
}
.select-box1 {
  background: #ececec;
}

.label {
  position: relative;
  padding: 5px 10px;
  cursor: pointer;
}
.open .label::after {
   content: "▲";
}
.label::after {
  content: "▼";
  font-size: 12px;
  position: absolute;
  right: 0;
  top: 0;
  padding: 5px 15px;
  border-left: 5px solid #fff;
}
</style>
 
 <body background ="img/bggg.png">

<?php

include("db-connection.php");
$i=0;
$q = $_GET['q'];
$vg_id = $_GET['vgid'];
$cname = $_GET['cname'];

 //echo $_SESSION['crid'];
 //$f= $_SESSION['crid'];

  if($q=="all")
 {
 	
 	 $que = "SELECT * FROM `f_crops_stock` WHERE `crop_id` = '".$vg_id."'";
 
 }
 else
 {
    $que = "SELECT * FROM `f_crops_stock` WHERE `crop_id` = '".$vg_id."' AND `farmer_id` in (SELECT `farmer_id` from `f_signup` WHERE `city` = '".$q."')";
}

    $res = $conn->query($que);
    if($res->num_rows > 0){
     
      $count=0;

        while($crop_details = mysqli_fetch_assoc($res)){

          if ($count%5==0) {
                echo'<div class="row">';  
          }

          $fid  = $crop_details['farmer_id']; //farmerid store variable

          $fname = mysqli_query($conn,"SELECT  * from `f_signup` where `farmer_id` = '".$fid."'");
            $fdetails = mysqli_fetch_assoc($fname);

          ?>
          <div class="col-md-3">
            <div class="pricing-card text-center z-depth-1 hoverable" style="background-color: rgba(255, 255, 255,0.8)">
                    <!--Label-->
                    <div class="darken-2 z-depth-1" style="background-color: #263143;">
                        <p class="no-margin white-text extra-padding-05" >
        <?php echo ucwords( $fdetails['first_name'])?> <br>| <?php echo ucwords($fdetails['city']) ?> |</p>
                    </div>
                    <!--Price-->
                    <div class="yellow z-depth-1" style="margin-top: -20px;height: px">
                        <h1 class="price" style="font-size: 22px;">₹ <b><?php echo $crop_details['exp_price'];?></b>&nbsp;per&nbsp;<?php echo $crop_details['exp_price_unit'] ;?></h1>                                              
                    </div>
                    <div class=" card-content darken-2 z-depth-1" style="margin-top: -25px;background-color: #47d147">
                     <p> Available Quantity : <strong><?php echo $crop_details['yield_qty'];?>&nbsp;<?php echo $crop_details['yield_qty_unit'] ;?></strong></p>
                   </div>
                    <!--Content-->
                   
                    <div class="card-content" style="height: 90px;">
                        <ul class="features-list">
                           <li class="">
                               <p class="card-text" style="font-size: 18px;"><b>Crop Description :</b> <br><?php echo $crop_details['description'] ;?></p>
                            </li>
                           </ul>
                         </div>

                        <!--CTA-->
                           <!-- Trigger the modal with a button -->
                        <button name="order[<?php echo $i; ?>]" class=" btn btn-danger btn-etc waves-effect waves-light " id="order[<?php echo $i; ?>]" data-toggle="modal" data-target="#qtyModal<?php echo $crop_details['id'] ?>"  onclick = "enter_qty('<?php echo $i; ?>','<?php echo $fdetails['farmer_id'] ?>','<?php echo $crop_details['id'] ?>');" >Order Now</button>
                    
                </div>
                <!--/.Pricing card-->

				<!--========ORDER MODAL====-->
        <!-- Modal: QUick look -->


        <div class="modal fade" id="qtyModal<?php echo $crop_details['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-qlook">
                 
                 <!--<form name="product-form">-->

                <!--Modal content-->
                <div class="modal-content">
                    
                    <!-- Modal header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                        <h4 class="modal-title text-center" id="m_cname<?php echo $crop_details['id'] ?>"></h4>
                    </div>
                    <!-- /.Modal conheaderent-->

                    <!-- Modal body-->
                    <div class="modal-body">
                        <!--Product Panel-->
                        <div class='container-fluid'>
                            <div class='product-panel'>
                                <div class='row'>

                                    <!--First column: carousel gallery-->
                                    <div class='col-xs-6 col-sm-6 col-lg-4'>
                                        <!-- Carousel -->
                                        <div id='car-gall' class='carousel slide carousel-fade carousel-thumbnails carousel-gallery'>
                                            <!--Main image-->
                                            <div class='col-xs-12'>
                                                <!-- Wrapper for slides -->
                                                <div class=' z-depth-1 hoverable' role='listbox'>
                                                    <!-- First slide -->
                                                  
                                                        <img src='' id="mimg<?php echo $crop_details['id'] ?>" alt='slide1' class="img-responsive">
                                                  
                                                    <!-- /.item -->

                                                </div>
                                                <!-- /.carousel-inner -->
                                            </div>
                                            <!--/.Main image-->
                                        </div>
                                        <!-- /.carousel -->
                                    </div>
                                    <!--/.First column: carousel gallery-->

                                    <!--Second column: product details-->
                                     <!--Title-->
                                       
                                    <div class='col-xs-12 col-sm-8 col-lg-8'>
                                       
                                <!--<p style='font-size:30px;margin-top:px;'>".$fname."
                                        <span style='font-size:20px;'>".$fcity."</span></p>-->
                                        <!--Price-->
                    
                    
                                        <div class='price'>
                                            <p class='green-text '  style='font-size : 25px;margin-top : px;'>₹ <span id="mcost<?php echo $crop_details['id'] ?>" > </span> </p>
                                            <p style='font-size : px;margin-top : -10px;color:#263143;'> Quantity Available : <b><span id="mqty<?php echo $crop_details['id'] ?>" style='margin-top : -10px;color:#263143;'></span></b></p>
                                        </div>

                                        <hr>
                                        <!--Quantity-->
                                         <div class='row'>
                                          <div class='col-md-6'> 
                                        <input type='number' id='m_qty<?php echo $crop_details['id'] ?>'  min=1 value='' class='quantity<?php echo $crop_details['id'] ?>'>
                                         <!--Select--></div>
                                       
                                            <div class='col-md-6'>
                                                <select id="m_unit<?php echo $crop_details['id'] ?>" name="m_unit" class="unit<?php echo $crop_details['id'] ?>">
                                                   <option value='' selected disabled class='dropsize'>--choose--</option>
                              <option value='Sack'>Sack</option>
                              <option value='Ton'>Ton</option>
                               <option value='Kilogram'>Kilogram</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input name='product_code'  type='hidden' id="m_pid<?php echo $crop_details['id'] ?>" value=''>
                                        <hr>
                                       <!-- <button type='button' class='addToCart btn btn-default waves-effect waves-light ' name ='cart' id='cart' " data-id="document" >Add to Cart</button>-->
                                     <button type="submit" class=" btn btn-default waves-effect waves-light"      onclick="add_cart('<?php echo $crop_details['id'] ?>');">Add to Cart</button>
                                        <br>
                                    </div>
                                    <!--Second column: product details-->

                                
                                </div>
                           
                        </div>
                        <!--/.Product Panel-->
                    </div>
                    <!-- /.Modal body-->

           
            </div>
                    <!--Modal footer: close button-->
                   <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                    </div>-->
                    <!--/.Modal footer: close button-->
                 <!-- </form>-->
                </div>
                <!-- Modal content-->
            </div>
        </div>
        <!--/.Modal: QUick look -->
      

<!--/.Activation Button-->

<!--<div class="card text-center" style="width: 21rem;height: 300px;">
    <div class="card-header  white-text" style="background-color : green"> Farmer :
        <?php echo ucwords( $fdetails['first_name'])?>  <?php echo ucwords($fdetails['city']) ?>
    </div>
    <div class="card-body">
        <h4 class="card-title" style="color: orange;font-size: 20px;">Available Quantity : <strong><?php echo $crop_details['yield_qty'];?>&nbsp;<?php echo $crop_details['yield_qty_unit'] ;?></strong></h4>
        <p class="card-text"><strong>Crop Description :</strong> <br><?php echo $crop_details['description'] ;?></p>
        <a class="btn btn-success btn-sm">Full details</a>
    </div>
    <div class="card-footer text-muted  black-text" style="background-color: yellow;">
        <p class="mb-0" style="font-size: px;"> Expected Price :<strong> Rs. <?php echo $crop_details['exp_price'];?>&nbsp;per&nbsp;<?php echo $crop_details['exp_price_unit'] ;?></strong></p>
    </div>
</div>-->
<!--/.Panel-->
     </div>   
  <?php
            $count++;
            if(($count+1)%5==0){
               echo '</div> <br>';
                 $count=0;
            }
		$i++;
        }

    }

    else{
          echo ' <h1 class="text-center" style="color: grey;opacity: 0.2;">No Farmers Found</h1> ' ;
          
    }
?>  

<!-- SCRIPTS -->
      
   <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
     <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	

</body>
</html>