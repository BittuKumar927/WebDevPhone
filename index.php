<html>
<head>
<title>
</title>
<style>

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
left:2%;
width:7%;
}

#m2{
left:9%;width:9%;
}
#m3{
left:18%;
width:12%;
}
#m4{
left:30%;
width:7%;
}
#m5{
left:37%;
width:7%;
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
#m5:hover {
background-color:red;
}
#box{
height:80%;
width:100%;
position:absolute;
top:10%;
left:0%;
}
#box1{
height:40%;
width:40%;
position:absolute;
top:20%;
left:25%;
padding-top:40px;

}
#box2{
height:10%;
width:100%;
position:absolute;
top:90%;
left:0%;
background-color:thistle;
}

#c4{
top:100%;
height:10%;
width:100%;
left:60%;
position:absolute;
background-color:red;
}
#c5{
top:110%;
height:80%;
width:40%;
left:0%;
position:absolute;
background-color:black;
}

#c51{
top:100%;
height:90%;
width:60%;
left:40%;
position:absolute;
background-color:darkslategray;
}

#c6{
top:190%;
height:40%;
width:100%;
left:0%;
position:absolute;
background-color:black;
}
#c61{
top:10%;
left:10%;
height:80%;
width:30%;
position:absolute;
color:white;
}
#c62{
top:10%;
left:50%;
height:80%;
width:40%;
position:absolute;
color:white;
}
#c63{
top:80%;
left:0%;
height:10%;
width:100%;
position:absolute;
color:white;
}
</style>
</head>
<body onload="slider()">
<div id="box"><img src="a.jpg " height="100%" width="100%" id="m">
<div id="box1"><center><font size="12" face="arial black" color="darkorchid">ONLINE MOBILE STORE</font></center></div>
</div>
<script>
var i=0;
var a=new Array('a.jpg','a1.jpg','a3.jpg');

function slider()
{
if(i<2)
{
i++;
}
else{
i=0;
}
document.getElementById("m").src=a[i];
setTimeout("slider()",3000);
}
</script>
<div id="box2"><h2><center>...THIS IS AN ONLINE MOBILE STORE WHERE USER CAN SELL AND PURCHASE MOBILE PHONES.....
</center></h2></div>
<div id="c5"><img src="g5.jpg" width="100%" height="100%"></div>
<div id="c51"><center><font color="orange" size="8"><u><br>ABOUT US</u></font></center><br>
<center><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white">
This is an online mobile store website where 
user can buy and sell
 mobile phones .
User can buy different kind of 
mobile phones at best price with free delivery cost.
This website also provides user to sell their mobile phone online with best value that is suitable for their phone.
The user can also see new and old mobile phones and can see the contact
 information of owner of old mobile phone 
after you will login.The user will &nbsp;&nbsp;&nbsp;get the phone in same condition that is similar to the photo in the wedsite.
We will deliver the products in 4-6 days at any place with 6 months warranty.
<br><br>
Mobile phones are the perfect way to stay connected with others and provide the user with a sense of security. 
In the event of emergency, having a cell phone can allow help to reach you quickly and could possibly save lives. ... 
The importance of cell phones goes way beyond the ability to make or receive phone calls.<br><br><br>
...Thank you for visiting...
</font></h2></center>
</div>
<div id="c6">
<div id="c61">
<font size="4"><u>Our Links</u></font><br><br>
<a href="index.php"><font size="3" color="white">Home</font></h6></a><br>
<a href="about .php"><font size="3" color="white">About</font></a><br>
<a href="product.php"><font size="3" color="white">Our Products</font></a><br>
<a href="contact.php"><font size="3" color="white">Contact us</font></a><br>
</div>
<div id="c62">

 <font size="4"><u>Contact Info</u><br>
 Address : Lalpur, Ranchi, Jharkhand - 834002<br>
 Phone no: 9034567382<br>
 Email Id:kumarisapna15585@gmail.com<br>
 Linkedin:www.linkedin.com/in/sapna</a><br>
</div>
<div id="c63"><center>Copyright 2019 and designed by<font color="blue"> Sapna Kumari</font></center></div>
</div>
<div id="ma">
<div class="m" id="m1"><a href="index.php">HOME</a></div>
<div class="m" id="m2"><a href="product.php">OUR PRODUCT</a></div>
<div class="m" id="m3" ><a href="reg.php">REGISTRATION</a></div>
<div class="m" id="m4" ><a href="login.php">LOGIN</a></div>
<div class="m" id="m5" ><a href="contact.php">CONTACT</a></div>
</div>
</body>
</html>
