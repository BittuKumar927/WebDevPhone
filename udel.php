<?php
session_start();
if($_SESSION['aid']!=session_id())
{
header("location:login.php");
}
?>
<a href="end.php">logout</a>| 
<a href="admin.php">mainpage of admin</a>| 
<a href="aduser.php">user record</a>| 
<a href="adproduct.php">insert and show product</a>| 
<a href="adminad.php">show all ad and delete</a>| 
<a href="adbill.php"> show bill</a>| 

<br>
<br>

<?php
$u=$_SESSION['u'];
echo'<font size="5" color="red">welcome </font>'.$u;
?>


<?php
if(isset($_GET['pp']))
{
	$pp=$_GET['pp'];
	include"connection.php";
	$q="delete from ad where ad_id_no='".$pp."'";
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
		header("location:usersefad.php");
	}
	else
	{
		echo mysqli_error($connection);
	}
}
else
{
	header("location:usersefad.php");
}
?>