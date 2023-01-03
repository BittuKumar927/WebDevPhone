<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--  bootstrap-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--  bootstrap end-->
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
height:90%;
width:100%;
position:absolute;
top:10%;
left:0%;
}
#box1{
height:90%;
width:100%;
position:absolute;
color:darkslategray;
top:10%;
left:20%;
}
#k{
margin:auto;
text-align:center;
background-color:rgba(0,0,0,0.5);
top:20%;
padding:150px;

}
.heading{
	font-size:18px;
	color:white;
	letter-spacing:2px;
}


</style>
</head>
<?php
session_start();
if(isset($_SESSION['aid']))
{
header("location:admin.php");
}
if(isset($_SESSION['uid']))
{
header("location:user.php");
}

?>
<body>




<div class="container-fluid">
<div class="row">
			<div class="col-md-4" id="box" ><img src="a.jpg " height="100%" width="100%" id="m">
			</div>
			</div>
		<div class="row-md-12">
			<div class="col-md-12" id="k" >
			<br>
			<h1><font color="white">LOGIN</font></h1><br>
			<p class="heading">Welcome to online mobile store</p>
			<P class="heading">Please enter your login details to login here.</p>
			<br>

<form action="check.php" method="POST">
<h4><font color="white">enter email id</font></h4><input type="text" name="n" placeholder="login id*" ><br><br>
<h4><font color="white">enter password</font></h4><input type="password" name="p" placeholder="Password*"><br><br>
<input type="submit" name="s">
</form>
<a href="reg.php"><h3>Create an Account</h3></a>
</div>
</div>
</div>
</div>
<div id="ma">
<div class="m" id="m1"><a href="index.php">HOME</a></div>
<div class="m" id="m2"><a href="product.php">OUR PRODUCT</a></div>
<div class="m" id="m3" ><a href="reg.php">REGISTRATION</a></div>
<div class="m" id="m4" ><a href="login.php">LOGIN</a></div>
<div class="m" id="m5" ><a href="contact.php">CONTACT</a></div>
</div>
</body>
