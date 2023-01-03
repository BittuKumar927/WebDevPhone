<?php
session_start();
if($_SESSION['aid']!=session_id())
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
.x{background-color:cyan;height:400px;margin:10px;}
.a{position:absolute;top:5%;left:5%;width:90%;height:90%;}
.b{position:absolute;top:25%;left:15%;padding:20px;
background:rgba(12,34,123,0.4);color:white;}
</style>

<nav class="nav navbar-inverse">
<div class="container">
<div class="navbar-header">

<a   class ="navbar-brand"href="end.php">logout</a>| 
<a  class ="navbar-brand" href="user.php">user profile</a>|
<a  class ="navbar-brand"  href="userallad.php">show all ad </a>|  
<a  class ="navbar-brand" href="uproduct.php">show product and book product</a>|
<a  class ="navbar-brand"  href="userpostad.php"> post ad</a>| 
<a  class ="navbar-brand"  href="usersefad.php">My Ad's and delete </a>|  
<a  class ="navbar-brand" href="ubill.php"> show bill of user</a>| 
</div>
</div>
</nav> 

<?php
$u=$_SESSION['u'];
echo'<font size="5" color="red">welcome </font>'.$u;
?>


<?php
if(isset($_GET['pp']))
{
	$pp=$_GET['pp'];
	include"connection.php";
	$q="delete from bill where bookid='".$pp."'";
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
		header("location:ubill.php");
	}
	else
	{
		echo mysqli_error($connection);
	}
}
else
{
	header("location:ubill.php");
}
?>