


 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
#header{
top:0%;
width:100%;
height:8%;
position:fixed;
background-color:black;

}
.navbar-brand:hover {
text-color:red;
}
</style>

<?php
session_start();
if($_SESSION['uid']!=session_id())
{
header("location:login.php");
}
?>


<style>
.x{background-color:cyan;height:200px;margin:10px;}
.a{position:absolute;top:5%;left:5%;width:90%;height:90%;}
.b{position:absolute;top:25%;left:15%;padding:20px;
background:rgba(12,34,123,0.4);color:white;}
</style>
<div id ="header">
<nav class="nav navbar-inverse">
<div class="container">
<div class="navbar-header">

<a  class ="navbar-brand"  href="end.php">logout</a>| 
<a  class ="navbar-brand"  href="user.php">user profile</a>| 
<a  class ="navbar-brand"  href="userallad.php">show all ad </a>| 
<a  class ="navbar-brand"  href="uproduct.php">show product and book product</a>|
<a  class ="navbar-brand"  href="userpostad.php"> post ad</a>| 
<a  class ="navbar-brand"  href="usersefad.php">show self ad and delete </a>| 
<a  class ="navbar-brand"  href="ubill.php"> show bill of user</a>| 
</div>
</nav> 
</div>
<br>
<br><br><br>
<?php
$u=$_SESSION['u'];
echo'<font size="5" color="red">welcome</font> '.$u;
?>

<hr color="red" > 

<div class="fluid-container">
	
<?php
include"connection.php";
		$q="select * from reg where email='".$u."'";
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
				echo'<br>firstname=> '.$r['firstname'];
				echo'<br>secondname=> '.$r['secondname'];
				echo'<br>email=> '.$r['email'];
				echo'<br> phone=>'.$r['phone'];
				$_SESSION['phone']=$r['phone'];
				$_SESSION['email']=$r['email'];
				echo'<br> password =>'.$r['password'];
				echo'<br><a href="userup.php">update</a>';
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