<?php
include"connection.php";
	$q="create table product
	(productid int(4) auto_increment,pname varchar(50) not null, price int(6) not null,
	 description varchar(50) not null, photo varchar(500) not null,
	primary key(productid))";
	
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