<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if($_SESSION['lflag']==0)
  header("location:/../FarmAhead/FA - new/index.php");
header("Content-Type: text/html;charset=UTF-8");

include("db-connection.php");
if(isset($_REQUEST["id"]))
{
  $vg_id= $_REQUEST["id"];
}
$vname = mysqli_query($conn,"SELECT EngName from vege_name where crop_id = '".$vg_id."'");
$name = mysqli_fetch_assoc($vname);
//
   ?>


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
 
        <script type="text/javascript" src="js/sweetalert.js"></script>
    
<style type="text/css">
 body {
      position: relative;
      overflow-x: hidden;
      overflow-y: scroll; 
      background-size: 80%;
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
  background-size: 45%;
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

@font-face {
              font-family: 'lsr';
              src: url(fonts/LoveStoryRough.ttf);
              }
    .mynewfont {
                font-family: 'lsr';
                }
</style>
</head>
<body onload="showUser('all','<?php echo $vg_id ;?>','<?php echo $name['EngName'];  ?>')" background ="img/bggg.png" >
   
        <!--Navbar-->
    <div class="row" id="home">
        <nav class="navbar navbar-fixed-top navbar-toggleable scrolling-navbar  " style="background-color:#001a1a;width: 100%; " id="myNavbar">

            <div class="container">
               <a class="navbar-toggler navbar-toggler-right hidden-md hidden-lg  " type="button" data-toggle="collapse" data-target="#collapseEx12" aria-controls="collapseEx2" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="icons/nav-side.png" style=" padding-left: 150px;padding-top: 20px;"></span>
        </a>
                <!--Navbar Brand-->
               <a class="navbar-brand " href="#"><img src="img/nav1.png" style="height: 35px;width: 170px;"></a>
                <!--Links-->
       <div class="collapse navbar-collapse" id="collapseEx12">
                <ul class="nav navbar-nav smooth-scroll">
                    <li class="nav-item active smooth-scroll" id="tab">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                      </ul>
         </div>            
            </div>

        </nav>
        </div>
        <!--/.Navbar-->
        <a class="btn btn-floating btn-large cyan pulse " href="view_cart.php" style="position: fixed;right:50px;top: 100px; z-index: 999999px;height: 70px;width: 70px;"><i class="material-icons" style="top: 117px;position: fixed;right: 59px;">shopping_basket</i></a>
       
       
<main>

<div class="text-center"><h4></h4></div>


  <p class="h5 text-center mb-4 mynewfont row" style="font-size: 50px;color: black;margin-top: 100px;"><?php echo $name['EngName'];  ?></p>
<!--=================DROPDOWN BOX===================-->      

 <div class="select-box" style="margin-top: 20px;"  >
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">All Districts </span> </label>
    <select id="select-box1" class="select" name="users" onchange="showUser(this.value,'<?php echo $vg_id ;?>','<?php echo $name['EngName'];  ?>')">
     <option value="all">All Districts</option>
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


<!--=====================================-->
<!--=====================FILTER DISTRICT====================-->
<script>
function showUser(str , vid , cname) {
 
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str+"&vgid="+vid+"&cname="+cname,true);
        xmlhttp.send();
    }
}
</script>

<div id="txtHint" style="margin-top: -30px;">  

</div>
<!--====================-->

                   
              

<!--<script>
				function enter_qty(i,yield_qty,exp_price,exp_per_unit,fname,fcity,fid,y_unit,p_id)
				{
					//alert(i+"\n"+yield_qty+"\n"+exp_price+"\n"+exp_per_unit+"\n"+fname+"\n"+fcity+"\n"+fid);
					
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() 
				{
					if (this.readyState == 4 && this.status == 200) 
					{
            

					 document.getElementById("mname").innerHTML = data[0];
					}
				};
				xmlhttp.open("GET", "print_details.php?avail="+yield_qty+"&e_price="+exp_price+"&e_unit="+exp_per_unit+"&fname="+fname+"&fcity="+fcity+"&fid="+fid+"&y_unit="+y_unit+"&p_id="+p_id,true);	
				xmlhttp.send();
				}
				</script>			-->
        <!--AJAX ID FETCH DATA SCRIPT-->  
                      
                      <script type="text/javascript">
                      function enter_qty(i,fid,p_id)
                     {
                      obj = { "i":i,"fid":fid,"p_id":p_id };
                      json_data = JSON.stringify(obj);
                      //alert(json_data);
                     var xmlhttp = new XMLHttpRequest();
                     
                     xmlhttp.onreadystatechange=function()
                     {
                      if (this.readyState == 4 && this.status == 200) 
                       {

                       var data= JSON.parse(xmlhttp.responseText);
                       var exp_price = data.exp_price;
                       var exp_price_unit = data.exp_price_unit;
                       var qty = data.yield_qty;
                       var qty_unit = data.yield_qty_unit;
                       var mcname = 'm_cname'+data.id;
                       var mcost  = 'mcost'+data.id;
                       var mimg = 'mimg'+data.id;
                       var m_pid = 'm_pid'+data.id;
                       var mqty = 'mqty'+data.id;
                       var munit = 'munit'+data.id;
                       var h_qty = 'h_qty'+data.id;
                        // Getting button Id

                        //var button = document.getElementById('cart');   
                        //document.getElementById("qtyModal").id = "qtyModal"+data.id; 
                          //alert("qtyModal["+data.id+"]");
                           document.getElementById(mcname).innerHTML = data.eng_name;
                        document.getElementById(mcost).innerHTML = exp_price+" per "+exp_price_unit;
                        document.getElementById(mqty).innerHTML = qty+" "+qty_unit;
                          document.getElementById(mimg).src = "../"+data.img_url;
                            document.getElementById(m_pid).value = data.id;
                           // button.setAttribute('data-id', data.id);
                      document.getElementById(m_qty).className = "quantity"+data.id; 
                             document.getElementById(m_unit).className = "unit"+data.id; 


                                                         /*document.getElementById("title_name").innerHTML = data.crop_name; document.getElementById("title_name").innerHTML = data.crop_name;*/
                        }

                     };
                     xmlhttp.open("GET","print_details.php?x="+json_data,true);
                     xmlhttp.send();
                     }
                     
                    </script>  		
 
 <!--ram-->
<script >
  $(document).ready(function () {

     // Attach Button click event listener 
    $(".mbutton").click(function(){

         // show Modal
         $('#qtyModal').modal('show');
    });
});
</script>
<script type="text/javascript">
function add_cart(p_id=""){
   $('#qtyModal'+p_id).modal('hide');
  var quantity = $(".quantity"+p_id).val();
  var unit = $(".unit"+p_id).val();
 $.ajax({
    type:"post",
    url:"ajax_cart.php",
    data:{action:'add',p_id:p_id,quantity:quantity,unit:unit},
    success:function(result){
      $('.cart_data').html(result);
    swal({
  position: 'center',
  type: 'success',
  title: 'Added to Cart!',
  showConfirmButton: false,
  timer: 1500
})

    }
  });
  
}

</script>


 <!-- -->


   <!-- manage product in cart s -->
<!--<script>

$(".product-form").submit(function(e){


var form_data = $(this).serialize();
var button_content = $(this).find('button[type=submit]');
$.ajax({
url: "manage_cart.php",
type: "POST",
dataType:"json",
data: form_data
}).done(function(data){


})
e.preventDefault();
});
                   
 </script>-->


                    <!--=========  end script ===== -->
</main>
    








 <!--================================================-->  

    <!-- SCRIPTS -->
      

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!--===========ADD TO CART  BUTTON JQUERY==============-->
     <!-- <script >
$( document ).ready(function(){
  $("#cart").click(function(){
    var id = $(this).attr("data-id");  
    alert(id);
    $.ajax({
      type: "GET",
      url: "ajax.php?id="+id+"&action=add"
    });
  });
 });  

      </script>
-->

    <script type="text/javascript">
        Waves.attach('.btn, .btn-floating', ['waves-light']);
        Waves.attach('.view .mask', ['waves-light']);
        Waves.attach('.waves-light', ['waves-light']);
        Waves.attach('.navbar li', ['waves-light']);
        Waves.init();
      </script>
<!--=========================SCROLLSPY SMOOTH SCROLL ANIM SCRIPT============================-->
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
<script type="text/javascript">
   $(document).ready(function () {
            $('select').material_select();
        });
</script>
  <!--=============DROPDOWN===================-->
  <script type="text/javascript">
    $("select").on("click" , function() {
  
  $(this).parent(".select-box").toggleClass("open");
  
});

$(document).mouseup(function (e)
{
    var container = $(".select-box");

    if (container.has(e.target).length === 0)
    {
        container.removeClass("open");
    }
});

$("select").on("change" , function() {
  
  var selection = $(this).find("option:selected").text(),
      labelFor = $(this).attr("id"),
      label = $("[for='" + labelFor + "']");
    
  label.find(".label-desc").html(selection);
    
});
  </script>
 
 
</body>
</html>