
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
<a  class ="navbar-brand" href="end.php">logout</a>|
<a  class ="navbar-brand"  href="admin.php">mainpage of admin</a>| 
<a  class ="navbar-brand"  href="aduser.php">user record</a>| 
<a   class ="navbar-brand" href="adproduct.php">insert and show product</a>| 
<a class ="navbar-brand" href="adminad.php">show all ad and delete</a>|
<a   class ="navbar-brand" href="adbill.php"> show bill</a>| </div>
</div>
</nav> 
<br>
<br>
<?php
$a=$_SESSION['a'];
echo'<font size="5" color="red">welcome</font> '.$a;
?>

	
<?php
include"connection.php";
		$q="select * from bill";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_assoc($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
echo'<br><br><table border="1" >
<tr><th>booking id</th><th>eamil</th><th>phone</th>
<th>product id</th><th>product name </th><th> rate </th>
<th> photo </th></tr>';
	
	while($r=mysqli_fetch_assoc($sq))
		{
				echo'<th> '.$r['bookid'].'</th>';
				echo'<th>'.$r['email'].'</th>';
				echo'<th>'.$r['phone'].'</th>';
				echo'<th>'.$r['productid'].'</th>';
				echo'<th>'.$r['pname'].'</th>';
				echo'<th>'.$r['price'].'</th>';
echo'<th> <img src="'.$r['photo'].'" width="50" height="50"></th></tr>';
			
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