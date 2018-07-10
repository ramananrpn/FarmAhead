

function c_initial()
{
document.getElementById("ulabel").style.color="white";
document.getElementById("ulabel").innerHTML="Username";
}

function valid_cname()
{ 
 var name = document.forms["cform"]["username"].value;
 document.getElementById("elabel").style.color="white";
document.getElementById("elabel").innerHTML="Email";
 if(name=="")
 {
 document.getElementById("ulabel").style.color = "red";
 document.getElementById("ulabel").innerHTML = "Enter Username";
 return false;
 }
 return true;
}

function valid_caddr()
{
 valid_cname();
 var addr = document.forms["cform"]["email"].value;
 document.getElementById("nlabel").style.color="white";
document.getElementById("nlabel").innerHTML="Phone Number";
 var atpos=addr.indexOf("@");
 var dotpos=addr.lastIndexOf(".");
 if(atpos<1 || dotpos<(atpos+2) || dotpos+2>=addr.length)
 {
 document.getElementById("elabel").style.color = "red";
 document.getElementById("elabel").innerHTML = "Enter Email";
 return false;
 }
 return true;
}

function valid_cphone()
{
valid_cname();
valid_caddr();
var pattern=/^[7|8|9]\d{9}$/;
var ph = document.forms["cform"]["num"].value;
document.getElementById("plabel").style.color="white";
document.getElementById("plabel").innerHTML="Password";
if(!ph.match(pattern))
{
document.forms["cform"]["num"].value='';
document.getElementById("nlabel").style.color = "red";
 document.getElementById("nlabel").innerHTML = "Enter Phone Number";
return false;
}
return true;
}

function valid_cpass()
{
valid_cname();
valid_caddr();
valid_cphone();
var pass = document.forms["cform"]["pass"].value;
document.getElementById("cplabel").style.color="white";
document.getElementById("cplabel").innerHTML="Re-type Password";
if(pass=="")
{
document.getElementById("plabel").style.color="red";
document.getElementById("plabel").innerHTML="Enter Password";
return false;
}
return true;
}

function valid_ccpass()
{
valid_cname();
valid_caddr();
valid_cphone();
valid_cpass();
var cpass=document.forms["cform"]["cpass"].value;
var pass=document.forms["cform"]["pass"].value;
if(pass!=cpass || cpass=="")
{
document.forms["cform"]["pass"].value="";
document.getElementById("plabel").style.color="red";
document.getElementById("plabel").innerHTML="Enter Password";
document.forms["cform"]["cpass"].value="";
document.getElementById("cplabel").style.color="red";
document.getElementById("cplabel").innerHTML="Enter Re-type Password";
return false;
}
return true;
}

function valid2()
{
var u =document.forms["cform"]["username"].value;
var e =document.forms["cform"]["email"].value;
var n =document.forms["cform"]["num"].value;
var p =document.forms["cform"]["pass"].value;
var cp=document.forms["cform"]["cpass"].value;
var city=document.getElementById("city").value;
if(u != "" && e != "" && n != "" && p != "" && cp!="" && city!="")
document.forms["cform"]["action"].disabled=false;
else
document.forms["cform"]["action"].disabled=true;
}
