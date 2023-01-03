<html>
<head>
<title>
</title>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

#ma{
left:0%;
top:0%;
width:100%;
height:20%;
position:fixed;
}

#ma1{
left:0%;
top:40%;
width:100%;
height:60%;
position:fixed;
background-color:gray;
}
</style>
</head>
<body onload="slider()">
<div id="ma"><img src="a1.jpg" width="100%"height="100%">
<?php
session_start();
if($_SESSION['aid']!=session_id())
{
header("location:login.php");
}
?>

<nav class="nav navbar-inverse">
<div class="container">
<div class="navbar-header">
<a class ="navbar-brand"  href="end.php">logout</a>|
<a class ="navbar-brand"  href="admin.php">mainpage of admin</a>| 
<a class ="navbar-brand"  href="aduser.php">user record</a>| 
<a class ="navbar-brand"  href="adproduct.php">insert and show product</a>|
<a class ="navbar-brand"  href="adminad.php">show all ad and delete</a>| 
<a class ="navbar-brand"  href="adbill.php">show bill</a>| 
</div>
</nav>

<br>
<br>
<?php
$a=$_SESSION['a'];
echo'<font size="5" color="red">welcome </font>'.$a;
?>

</div>
<div id="ma1"><img src="a.jpg " height="100%" width="100%" id="m"></div>
<script>
var i=0;
var a=new Array('a.jpg','a2.jpg','a3.jpg');

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
</body>
</html>