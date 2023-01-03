<html>
<head>
<title>
</title>
<style>

#box{
height:100%;
width:100%;
position:absolute;
top:10%;
left:0%;
border:3px solid black;
}

#ma{
left:0%;
top:0%;
width:100%;
height:10%;
position:fixed;
background-color:black;
}

.m{
height:70%;

position:absolute;
top:15%;
text-align:center;
line-height:50px;
font-size:1.2vw;
cursor:pointer;
}
#m1{
right:58%;
width:7%;
}

#m2{
right:45%;
width:11%;
}
#m3{
right:32%;
width:10%;
}
#m4{
right:22%;
width:7%;
}
#m5{
right:12%;
width:7%;
}
#m6{
right:2%;
}
.m a{text-decoration:none;color:white;}

#m1:hover {
background-color:red;
}
#m2:hover {
background-color:red;
}
#m3:hover {
background-color:red;
}
#m4:hover {
background-color:red;
}
#m5:hover {background-color:red;}
#m6:hover {background-color:red;}


#st{
left:0%;
top:10%;
height:100%;
width:100%;
background-color:lightgreen;
position:absolute;
}

#sty{
left:0%;
top:0%;
height:90%;
width:50%;
position:absolute;
padding:20px;
color:white;
}
#sty2{
right:0%;
top:4%;
height:90%;
width:50%;
position:absolute;
border:1px solid gray;
}
#n{
width:90%;
height:5%;
}
#n1{
width:90%;
height:5%;
}
#n2{
width:90%;
height:5%;
}
#ad{
width:90%;
height:35%;
}
</style>
</head>
<body>

<div id="st"><img src="a1.jpg" width="100%"height="100%">
<div id="sty2"><div style="width: 100%;position: relative;"><iframe width="100%" height="100%" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=ranchi%20book%20store+(Title)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/es/">gmapgen es</a> & <a href="http://intramarketresearch.org/">intramarketresearch.org</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
</div>
<div id="sty">
<font size="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GET IN TOUCH</font><br><br>
&nbsp;&nbsp;<font size="4">Address:Lalpur,Ranchi/Ph no : 8263746510/Email id : kumarisapna15585@gmail.com</font><br><br>
<font size="5">Name:</font><br>
<input type="text" id="n" onblur="ncheck()" placeholder="Your name.."><span style="color:red;" id="ne"></span><br><br>
<font size="5">Email:</font><br>
<input type="text" id="n1" onblur="n1check()" placeholder="Your  email id.."><span style="color:red;" id="n1e"></span><br><br>
<font size="5">Phone no:</font><br>
<input type="text" maxlength="10" id="n2"onblur="n2check()" placeholder="Your phone no.."><span style="color:red;" id="n2e"></span><br><br>
<font size="5">Message:</font><br>
<textarea rows="10" cols="18" id="ad" onblur="adcheck()" placeholder="Enter your message.."></textarea><span id="ade" style="color:red;"></span><br><br>
<button onclick="show()">send</button>
<input type="submit" name="reset" value="Reset" onclick="clr()">
</div>
</div>
<div id="ma">
<div class="m" id="m1"><a href="index.php">HOME</a></div>
<div class="m" id="m2" ><a href="product.php">OUR PRODUCT</a></div>
<div class="m" id="m3" ><a href="reg.php">REGISTRATION</a>
</div>
<div class="m" id="m4"><a href="login.php">LOGIN</a></div>
<div class="m" id="m5"><a href="contact.php">CONTACT</a></div>
</div>
<script>
function ncheck()
{
var n,nc;
n=document.getElementById("n").value;
nc=/^[a-zA-Z ]+$/;
if(!n.match(nc)|| n.charAt(0)==" ")
{
document.getElementById("ne").innerHTML="error";
return 0;
}
else
{
document.getElementById("ne").innerHTML="";
return 1;
}
}

function n1check()
{
var n1,nc1;
n1=document.getElementById("n1").value;
nc1=/^[a-zA-Z0-9._-]+\@[a-zA-Z]+\.[a-zA-Z.]{2,6}$/;
if(!n1.match(nc1))
{
document.getElementById("n1e").innerHTML="error";
return 0;
}
else
{
document.getElementById("n1e").innerHTML="";
return 1;
}
}

function n2check()
{
var n2,n2c;
n2=document.getElementById("n2").value;
n2c=/^[0-9]{10,10}$/;
if(!n2.match(n2c))
{
document.getElementById("n2e").innerHTML="error";
return 0;
}
else
{
document.getElementById("n2e").innerHTML="";
return 1;
}
}
function adcheck()
{
var a,l;
a=document.getElementById("ad").value;
l=a.length;
if(l<10)
{
document.getElementById("ade").innerHTML="***Error***";
return 0;
}
else
{
document.getElementById("ade").innerHTML="";
return 1;
}
}
function show()
{

if(ncheck()==1 && n1check()==1 && n2check()==1 && 
adcheck()==1)
{
var n,e,ph,dob,ad,hq;
n=document.getElementById("n").value;
e=document.getElementById("n1").value;
ph=document.getElementById("n2").value;
ad=document.getElementById("ad").value;
alert("Dear "+n+"\n your message sent successfully...\n Thank you for enquiry");
}
else
{
alert("check entered details");
ncheck();
 n1check();
 n2check();
 adcheck();
}
}

function clr()
{
	document.getElementById("n").value="";
	document.getElementById("n1").value="";
	document.getElementById("n2").value="";
	document.getElementById("ad").value="";



}
</script>
</body>
</html>