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
</style>
</head>
<body>
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
<a class ="navbar-brand" href="end.php">logout</a>|
<a class ="navbar-brand" href="admin.php">mainpage of admin</a>|
<a class ="navbar-brand" href="aduser.php">user record</a>| 
<a class ="navbar-brand" href="adproduct.php">insert and show product</a>|
<a class ="navbar-brand" href="adminad.php">show all ad and delete</a>| 
<a class ="navbar-brand" href="adbill.php"> show bill</a>|
</div>
</div>
</nav> 
<br>
<br>
<?php
$a=$_SESSION['a'];
echo'<font size="5" color="red">welcome </font>'.$a;
?>


<hr color="red" > 

<div class="fluid-container">
	
<?php
include"connection.php";
		$q="select * from ad";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_assoc($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
			echo'<div class="row">';
	while($r=mysqli_fetch_assoc($sq))
		{
	echo'<div class="col-md-4">';
		echo'<div class="x">';
			echo'<div class="a">';
				echo' <img src="'.$r['photo'].'" width="100%" height="100%">';
			echo'</div>';
			echo'<div class="b">';
			echo'<br>ad_id_no=> '.$r['ad_id_no'];
			  $pp1=$r['ad_id_no'];
				echo'<br>product name=> '.$r['uname'];
				echo'<br>product price=>'.$r['uprice'];
				echo'<br>purchase_year=>'.$r['purchase_year'];
				echo'<br>product description =>'.$r['description'];
							echo'<br><th>
	<a href="adel.php?pp=' .$pp1. ' ">delete</a></th></tr>';
			echo'</div>';
		echo'</div>';
	echo'</div>';
		}
		
		echo'</div>';
			}
			else
			{
				echo' no record found';
			}
	}
	else
	{
		echo mysqli_error($connection);
	}
?>

</div>
