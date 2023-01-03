<?php
include"connection.php";
	$q="create table bill
	(bookid int(4) auto_increment,
	productid int(5) not null, pname varchar(50) not null,
	price int(5) not null,
	email varchar(50) not null, phone varchar(15) not null,
	photo varchar(500) not null,
	primary key(bookid))";
	
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