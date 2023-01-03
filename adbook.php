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
			$q="select * from ad where ad_id_no='".$p."'";
		include"connection.php";
	$sq=mysqli_query($connection,$q);
	if(mysqli_fetch_array($sq)>0)
	{
		$sq=mysqli_query($connection,$q);
			while($r=mysqli_fetch_array($sq))
			{
				$_SESSION['ad_id_no']=$r['ad_id_no'];
				$_SESSION['email']=$r['email'];
				$_SESSION['uname']=$r['uname'];
				$_SESSION['uprice']=$r['uprice'];
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
echo '<br> ad_id_no: '.$_SESSION['ad_id_no']; 
echo '<br> product name: '.$_SESSION['uname']; 
echo '<br> product rate: '.$_SESSION['uprice']; 
echo '<br> <img src="'.$_SESSION['photo'].'" width="50" height="50">';
echo'<form action="" method="POST">'; 
echo'<br><br>price<input type="text" name="r" id="r" 
value='.$_SESSION["uprice"].' readonly >';



echo'<br><input type="submit" name="s">';
echo'</from>';
?>

<?php

if(isset($_POST['s']))
{
	
$pid=$_SESSION['ad_id_no'];
$pn=$_SESSION['uname'];
$pr=$_SESSION['uprice'];
$pp=$_SESSION['photo'];
$em=$_SESSION['email'];
$ph=$_SESSION['phone'];




	include"connection.php";
		$q="select * from reg where email='".$em."'";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_assoc($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
			echo 'u can contact on following detail <br>';
	while($r=mysqli_fetch_assoc($sq))
		{
				echo'<br>firstname=> '.$r['firstname'];
				echo'<br>secondname=> '.$r['secondname'];
				echo'<br>email=> '.$r['email'];
				echo'<br> phone=>'.$r['phone'];
				
		}
		
	
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

}


?>
	
