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
<title>Signup-Farmer</title>
<link rel="stylesheet" type="text/css" href="css/temp.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-flex.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.4.css" >
<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.min.css">
<link rel="icon" type="image/png" href="../url logo/logo1.png" sizes="100*100">

<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
<style type="text/css">
  .entry:not(:first-of-type)
{
    margin-top: 0px;
}

.glyphicon
{
    font-size: 12px;
}
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #fff;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    top: 60px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 5.5s;
    animation: fadein 0.5s, fadeout 0.5s 5.5s;
}

@-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 60px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 0;}
    to {top: 60px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {top: 60px; opacity: 1;} 
    to {top: 0; opacity: 0;}
}

@keyframes fadeout {
    from {top: 60px; opacity: 1;}
    to {top: 0; opacity: 0;}
}
</style>

<body class="img-responsive" style="padding-top: 30px;">

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
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup-select.php" style="font-size: 20.5px;"  data-toggle="tooltip" data-placement="bottom"  title="Click to Sign Up "><span  style="font-size: 20.5px;" class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
         <li class="dropdown" style="font-size: 20.5px;" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#S"   aria-haspopup="true" aria-expanded="false" ><span  style="font-size: 20.5px;" class="glyphicon glyphicon-log-in"></span> Login</a>
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
  <!--=================================PROGRESS BAR AND FARMER FORM======================-->
    <div class="row ">
      <form id="msform" action="php-farmer_signup.php" method="POST" class="form-inline" autocomplete="off" data-toggle="validator" role="form">
  <!-- progressbar -->
 <ul id="progressbar">
    <li class="active">Personal Details</li>
    <!--<li>Communication details</li>-->
    <li>Account Setup</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
  <div class="container" style="background-color: rgba(0, 0, 0,0.8);position: relative; width: 100%;border-radius: 5px;padding-bottom: 2px;left: 50px;">
    <h2 class="fs-title">Personal Details</h2>
  </div>
    <h3 class="fs-subtitle">உங்கள் தனிப்பட்ட விவரங்களை பதிவு செய்யவும்  </h3>
    <div class="form-input" >
    <input class="form-control validate" type="text" name="fname" pattern="^[a-zA-Z](\D+)$" id="txt" onclick="valid1()" onkeyup="valid1()" placeholder=" Name / பெயர்"   data-toggle="tooltip" data-placement="bottom"  title="உங்கள் பெயரை உள்ளிடவும்" required />
      </div>
  <!-- <div class="form-group row">
    <div class="center-block">
  <label for="example-date-input" class="col-xs-5 col-form-label" style="" data-toggle="tooltip" data-placement="left"  title="பிறந்த தேதி" required><h4><strong>Date Of Birth</strong></h4></label>
  <div class="col-xs-7">
       
    <input class="form-control validate" type="date" value="01/01/1980" id="example-date-input" name="dob" data-toggle="tooltip" data-placement="right"  title="பிறந்த தேதி" required>
  </div>
  </div>
</div>-->
    <div class="row" style="text-align: center;" >
        <div class="center-block">
   <h4> <label class="custom-control custom-radio ">
  <input id="radio1" name="sex" type="radio" onclick="valid1()" onkeyup="valid1()" class="custom-control-input validate" value="Male " required>&nbsp;
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Male / ஆண்</span>
</label>  &nbsp; &nbsp; &nbsp;
<label class="custom-control custom-radio">
  <input id="radio1" name="sex" type="radio" onclick="valid1()" onkeyup="valid1()" class="custom-control-input" value="Female">&nbsp;
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Female /
பெண்</span>
</label></h4>
        </div>


        <textarea class="validate" id="address" name="address" onkeyup="valid1()" placeholder="Address / முகவரி"  data-toggle="tooltip" data-placement="bottom"  title="உங்கள் முகவரியை உள்ளிடவும்" required></textarea>

        <!--<div class="form-group col-sm-4">
         <input type="text" name="pin" placeholder="Pin-Code /
அஞ்சல் குறியீடு" />
    </div>-->

           
            <div class="form-group col-sm-6">
  
  <select class="form-control" id="city" name="city" onclick="valid1()" onkeyup="valid1()" required data-toggle="tooltip"  data-placement="bottom"  title="நகரம்" style="height: 45px;width: 200px;color: rgb(116, 127, 139)">
    <option disabled="" selected="" value="" >City / நகரம்</option>
    <option value="Ariyalur">அரியலூர்/Ariyalur</option>
    <option value="Chennai">சென்னை/Chennai</option>
    <option value="Coimbatore">கோயம்புத்தூர்/Coimbatore</option>
    <option value="Cuddalore">கடலூர்/Cuddalore</option>
    <option value="Dharmapuri">தர்மபுரி/Dharmapuri</option>
    <option value="Dindigul">திண்டுக்கல்/Dindigul</option>
    <option value="Erode">ஈரோடு/Erode</option>
    <option value="Kancheepuram">காஞ்சிபுரம்/Kancheepuram</option>
    <option value="Kanyakumari">கன்னியாகுமரி/Kanyakumari</option>
    <option value="Karur">கரூர்/Karur</option>
    <option value="Krishnagiri">கிருஷ்ணகிரி/Krishnagiri</option>
    <option value="Madurai">மதுரை/Madurai</option>
    <option value="Nagapattinam">நாகப்பட்டினம்/Nagapattinam</option>
    <option value="Namakkal">நாமக்கல்/Namakkal</option>
    <option value="Perambalur">பெரம்பலூர்/Perambalur</option>
    <option value="Pudukottai">புதுக்கோட்டை/Pudukottai</option>
    <option value="Ramanathapuram">இராமநாதபுரம்/Ramanathapuram</option>
    <option value="Salem">சேலம்/Salem</option>
    <option value="Sivaganga">சிவகங்கை/Sivaganga</option>
    <option value="Thanjavur">தஞ்சாவூர்/Thanjavur</option>
    <option value="The Nilgiris">நீலகிரி/The Nilgiris</option>
    <option value="Theni">தேனி/Theni</option>
    <option value="Thiruvallur">திருவள்ளூர்/Thiruvallur</option>
    <option value="Thiruvannamalai">திருவண்ணாமலை/Thiruvannamalai</option>
    <option value="Thiruvarur">திருவாரூர்/Thiruvarur</option>
    <option value="Thirunelveli">திருநெல்வேலி/Thirunelveli</option>
    <option value="Tiruppur">திருப்பூர்/Tiruppur</option>
    <option value="Trichirappalli">திருச்சிராப்பள்ளி/Trichirappalli</option>
    <option value="Tuticorin">தூத்துக்குடி/Tuticorin</option>
    <option value="Vellore">வேலூர்/Vellore</option>
    <option value="Villupuram">விழுப்புரம்/Villupuram</option>
    <option value="Virudhunagar">விருதுநகர்/Virudhunagar</option>
  </select>
</div>
              <!--<input type="text" name="city" placeholder="City / நகரம்" data-toggle="tooltip" data-placement="bottom"  title="நகரம்" required />-->

           
            <div class="form-group col-sm-6">
    <input type="text" name="state" id="state"  data-toggle="tooltip" data-placement="bottom" value="TamilNadu/தமிழ்நாடு"  title=" மாநிலம் " readonly />
      </div>
</div>
 <small>Press Next <span class="glyphicon glyphicon-arrow-down"></span> to go to Next Step :)<br>அடுத்த படி செல்ல Next-ஐ அழுத்தவும்</small>
<br>
<!--<div id="dynamic-sa">
  <div class="input-group entry" >
      <input type="text" name="service-area" placeholder="Areas of Service"  data-toggle="tooltip" data-placement="bottom"  title="service Areas" class="form-control" style="" id="service_area"/>
          <span class="input-group-btn">
                              <button class="btn btn-success btn-add center-block" type="button" style="margin-bottom: 12px;" data-target="tag-controls" id="addtextbox">
                                  <span class="glyphicon glyphicon-plus" ></span>
                              </button>
                          </span>
                          </div>



 </div>
    <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>
<br><br>-->
    <input type="button" id="next" name="next" class="next action-button" value="Next" disabled="true"  data-toggle="tooltip" data-placement="right"  title="அடுத்த படி செல்ல ''கிளிக்''  செய்யவும் "  />

  </fieldset>
  <!--<fieldset>
  <div class="container" style="background-color: rgba(0, 0, 0,0.8);position: relative; width: 100%;border-radius: 5px;padding-bottom: 2px;left: 50px;">
    <h2 class="fs-title">Communication details</h2>
  </div>
    <h3 class="fs-subtitle">Fill in your exact residencial details</h3>
        <textarea name="address" placeholder="Address"></textarea>
    <input type="text" name="city" placeholder="City" />

    <input type="text" name="phone" placeholder="Phone" maxlength="10" />
    <input type="text" name="pin" placeholder="Pin-Code" />
    <input type="text" name="state" placeholder="State" />

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>-->
  <fieldset>
  <div class="container" style="background-color: rgba(0, 0, 0,0.8);position: relative; width: 100%;border-radius: 5px;padding-bottom: 2px;left: 50px;">
    <h2 class="fs-title">Create your account</h2>
    </div>
    <h3 class="fs-subtitle">உங்கள் தொலைபேசி எண்ணை உள்ளிட்டு ஒரு PIN / கடவுச்சொல்லை அமைக்கவும் </h3>
    <input type="tel" class="form-control phone validate"  id="phone" name="phone" placeholder="Phone Number / தொலைபேசி எண்" maxlength="10" minlength="10" onkeyup="validatephone(this)" onclick="valid2()" data-toggle="tooltip" data-placement="bottom"  title="
உங்கள் தொலைபேசி எண்ணை உள்ளிடவும்"/>

    <input type="password" name="pin" style="" placeholder="PIN / Password" class="form-control inputpass validate" minlength="4" maxlength="4"  id="pass1" onclick="valid2()" onkeyup="valid2()" required data-toggle="tooltip" data-placement="bottom"  title="4 இலக்க PIN அமைக்க"/>
      <span class="help-block" style="color: black;margin-top: -2px;"><strong>*Minimum of 4 characters*</strong></span>

    <input type="password" name="cpin" placeholder="Confirm PIN / Password" class="form-control inputpass validate" minlength="4" maxlength="4" placeholder="Enter again to validate"  id="pass2" onkeyup="valid2(); return false;" required data-toggle="tooltip" data-placement="bottom"  title="மீண்டும் உங்கள் PIN ஐ உள்ளிடவும்"  />
     <span id="confirmMessage" class="confirmMessage"></span>

     <small><br>
*** உங்கள் PIN / கடவுச்சொல்லை நினைவில் கொள்ளவும்  ***</small><br>
        <input type="button" name="previous" class="previous action-button" value="Previous" data-toggle="tooltip" data-placement="bottom"  title="முந்தைய படி செல்ல  ''கிளிக்''  செய்யவும்"/>
    <input type="submit" name="submit" class="submit action-button" value="Submit" id="saveData" disabled="true" data-toggle="tooltip" data-placement="bottom"  title="உங்கள் கணக்கை உருவாக்க  ''கிளிக்''  செய்யவும்"  />
  </fieldset>
</form>
</div>
</div>
<div id="snackbar">Login Successfully...</div>
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
    if ( numval.charAt(0)=='+')
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|` ¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
    valid2();
}

function valid1()
{
var n =document.forms["msform"]["txt"].value;
var r =document.forms["msform"]["sex"].value;
var a =document.forms["msform"]["address"].value;
var s =document.forms["msform"]["city"].value;
var st =document.forms["msform"]["state"].value;
if(n != "" && r != "" && a != "" && s != "" && st!="" )
{
  document.forms["msform"]["next"].disabled=false;
}
else
{
  document.forms["msform"]["next"].disabled=true;
}

}

function valid2()
{
  var num=document.forms["msform"]["phone"].value;
  var pin=document.forms["msform"]["pass1"].value;
  var cpin=document.forms["msform"]["pass2"].value;
  var pattern=/^[7|8|9]\d{9}$/;
  if(num!="" && num.match(pattern) && pin!="" && cpin!="" && pin==cpin)
  {
    document.getElementById("saveData").disabled=false;
  }
  else
  {
    document.getElementById("saveData").disabled=true;
  }

}
// validates text only

//PASSWORD PIN
/*function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}*/

// validate date of birth
/*function dob_validate(dob)
{
var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

    if(regDOB.test(dob) == false)
    {
    document.getElementById("statusDOB").innerHTML  = "<span class='warning'>DOB is only used to verify your age.</span>";
    }
    else
    {
    document.getElementById("statusDOB").innerHTML  = "<span class='valid'>Thanks, you have entered a valid DOB!</span>";
    }
  }*/
</script>
<script type="text/javascript">
 
var password = document.getElementById("pass1")
  , confirm_password = document.getElementById("pass2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onchange = validatePassword;
</script>
<!--======================================DYNAMIC TEXT FIELD SCRIPT========================-->
<!--<script>
  var checkCount = 1;
            $("#addtextbox").click(function (e) {
                e.preventDefault();
                checkCount++;
                $("#dynamic-sa").append('<div class="input-group entry" > <input type="text" name="service-area" placeholder="Areas of Service"  data-toggle="tooltip" data-placement="bottom"  title="service Areas" class="form-control" style="" id="service_area '+ checkCount + '" /> <span class="input-group-btn"><button class="btn btn-danger btn-remove center-block" type="button" style="margin-bottom: 12px;" data-target="tag-controls" id="removeTextbox"><span class="glyphicon glyphicon-minus"  ></span></button> </span>  </div>'); });

            $("#dynamic-sa").on("click", "#removeTextbox", function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                checkCount--;
            });

        $('#saveData').click(function(){        // when we click the save button
        var data = [];                      // create a new array to store stuff
       var $rows = $('#dynamic-sa > div');  // get a list of the children div's that have been added
       $rows.each(function(){              // for each of those rows...

        var $rowTextbox = $(this).find('input[type="text"]');         // get a reference to the textbox in the row
        var rowData = {};                               // create a new object for the row

        rowData.value = $rowTextbox.val();              // get the value of the textbox

        data.push(rowData);                             // add object to array
    });
    console.log(data);        // result
});

</script>-->

</script>

 <!--===========================FORM SCRIPT=================================-->
  <script type="text/javascript" src="js/jquery-easing.js"></script>
  <script src="js/easing-plugin.js" type="text/javascript"></script>
  <script src="js/signup-script.js" type="text/javascript" ></script>

</body>
</html>
