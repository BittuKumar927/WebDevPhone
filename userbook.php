<?php
session_start();
if($_SESSION['uid']!=session_id())
{
header("location:login.php");
}
?>


 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<style>
.x{background-color:cyan;height:200px;margin:10px;}
.a{position:absolute;top:5%;left:5%;width:90%;height:90%;}
.b{position:absolute;top:25%;left:15%;padding:20px;
background:rgba(12,34,123,0.4);color:white;}
</style>

<nav class="nav navbar-inverse">
<div class="container">
<div class="navbar-header">

<a class ="navbar-brand"  href="end.php">logout</a>| 
<a class ="navbar-brand" href="user.php">user profile</a>| 
<a  class ="navbar-brand"  href="userallad.php">show all ad </a>| 
<a class ="navbar-brand"  href="uproduct.php">show product and book product</a>| 
<a  class ="navbar-brand"  href="userpostad.php"> post ad</a>| 
<a  class ="navbar-brand"  href="usersefad.php">show self ad and delete </a>| 
<a class ="navbar-brand"  href="ubill.php"> show bill of user</a>| 
</div>
</nav> 
<br>
<br>
<?php
$u=$_SESSION['u'];
echo'<font size="5" color="red">welcome</font> '.$u;
?>

<hr color="red" > 

<div class="fluid-container">
<div class="row">	
<div class="col-md-4 col-md-offset-2">	
<?php
if(isset($_GET['pp']))
{
	$p=$_GET['pp'];
			$q="select * from product where productid='".$p."'";
		include"connection.php";
	$sq=mysqli_query($connection,$q);
	if(mysqli_fetch_array($sq)>0)
	{
		$sq=mysqli_query($connection,$q);
			while($r=mysqli_fetch_array($sq))
			{
				$_SESSION['productid']=$r['productid'];
				$_SESSION['pname']=$r['pname'];
				$_SESSION['price']=$r['price'];
				$_SESSION['photo']=$r['photo'];
				$_SESSION['description']=$r['description'];
			}
	}
	else
	{
		echo'no record found ';
	}
	
}
else
{
	header("location:uproduct.php");
}
?>


<?php
echo 'please conform ur booking ';
echo '<br> product id: '.$_SESSION['productid']; 
echo '<br> product name: '.$_SESSION['pname']; 
echo '<br> product rate: '.$_SESSION['price']; 
echo '<br> <img src="'.$_SESSION['photo'].'" width="50" height="50">';
echo'<form action="" method="POST">'; 
echo'<br><br>price<input type="text" name="r" id="r" 
value='.$_SESSION["price"].' readonly >';



echo'<br><input type="submit" name="s">';
echo'</from>';
?>

<?php

if(isset($_POST['s']))
{
	
$pid=$_SESSION['productid'];
$pn=$_SESSION['pname'];
$pr=$_SESSION['price'];
$pp=$_SESSION['photo'];
$em=$_SESSION['email'];
$ph=$_SESSION['phone'];


include"connection.php";

	$q1="insert into bill
	(productid,pname,price,email,phone,photo)
	values ('".$pid."','".$pn."','".$pr."',
	'".$em."','".$ph."','".$pp."')";
	
		

	if(mysqli_query($connection,$q1))
	{
		echo '<script> alert(" thank for billing ")</script>';
		header("location:ubill.php");
		
	}
	else
	{
		echo mysqli_error($connection);
	}
}


?>
	
