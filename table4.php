<?php
include"connection.php";
	$q="create table ad
	(ad_id_no int(5) auto_increment,
	email varchar(50) not null,
	 uname varchar(50) not null,
	uprice int(6) not null,purchase_year date not null ,
	description varchar(50) not null, 
	photo varchar(500) not null,
	primary key(ad_id_no))";
	
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