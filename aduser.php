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
height:30%;
position:fixed;
}
</style>
</head>
<body>
<div id="ma">
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
</nav>
<br>
<br>

<?php
$a=$_SESSION['a'];
echo'<font size="5" color="red">welcome </font>'.$a;
?>

<?php
include"connection.php";
		$q="select * from reg ";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_array($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
		echo'<table border="red"><tr bgcolor="cyan">
		<th>firstname</th><th>secondname</th><th>email</th><th>phone</th><th>password</th><th>image</th>
		<th>update/delete</th></tr>';
		while($r=mysqli_fetch_array($sq))
		{
		    echo'<br><tr><th> '.$r['firstname'].'</th>';
		    echo'<th> '.$r['secondname'].'</th>';
			echo'<th> '.$r['email'].'</th>';
			$uu=$r['email'];
			echo' <th>'.$r['phone'].'</th>';
			echo' <th>'.$r['password'].'</th>';
	echo'<th> <img src="'.$r['photo'].'" width="50" height="50"></th>';
	echo'<th>
<a href="auserup.php?au='.$uu.'">update</a>
	/
	<a href="auserdel.php?au='.$uu.'">delete</a></th></tr>';
		}
		echo'</table>';
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
</body>
</html>