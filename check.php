<?php
if(isset($_POST['s']))
{
$n=$_POST['n'];
$p=$_POST['p'];
if($n=='argus' && $p=='academy')
{
		session_start();
		$_SESSION['a']=$n;
		$_SESSION['aid']=session_id();
		header("location:admin.php");
}
else
{

	include"connection.php";
$q="select * from reg where email='".$n."' and password='".$p."'";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_row($sq)>0)
			{
			session_start();
		$_SESSION['u']=$n;
		$_SESSION['uid']=session_id();
		header("location:user.php");
			}	
			else
			{
			header("location:login.php");
			}			
	}
	else
	{
		echo mysqli_error($connection);
	}
		
}
}
else
{
header("location:login.php");
}
?>