<?php
include"connection.php";
	$q="create table reg
	(firstname varchar(50),secondname varchar(50), email varchar(50), phone varchar(15) not null,
	password varchar(20) not null,
	photo varchar(500) not null,
	primary key(email))";
	
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
		echo 'table created';
	}
	else
	{
		echo mysqli_error($connection);
	}
	
?>