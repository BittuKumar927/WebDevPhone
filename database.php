<?php
$server='localhost:3306';
$user='root';
$password='sapnakumari';
	$cn=mysqli_connect($server,$user,$password);  // to connect mysql
	if($cn)
	{
		$q="create database sapna";
		$sq=mysqli_query($cn,$q);   // function to run sql query [conncetion,query]
		if($sq)
		{
			echo' database created';
		}
		else
		{
			echo mysqli_error($cn); // function to check error of sql query [connction]
		}
	}
	else
	{
		echo '<br>'.mysqli_connect_errno(); // function to check error in connection to mysql or database]
		echo '<br>'.mysqli_connect_error();
	}


?>