

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.x{background-color:cyan;height:200px;margin:10px;}
.a{position:absolute;top:5%;left:5%;width:90%;height:90%;}
.b{position:absolute;top:25%;left:15%;padding:20px;
background:rgba(12,34,123,0.4);color:white;}
</style>

<nav class="nav navbar-inverse">
<div class="container">
<div class="navbar-header">

<a class ="navbar-brand" href="index.php">HOME</a>
<a class ="navbar-brand" href="product.php">OUR PRODUCT</a>
<a class ="navbar-brand" href="reg.php">REGISTRATION</a>
<a class ="navbar-brand" href="login.php">LOGIN</a>
<a class ="navbar-brand" href="contact.php">CONTACT</a>

</div>
</nav> 
<br>

<h1 align="center"><font color="mahogany" face="arial black">NEW PRODUCTS</font></h1>
<hr color="red" > 

<div class="fluid-container">
	
<?php
include"connection.php";
		$q="select * from product";
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
			echo'<br>productid=> '.$r['productid'];
			  $pp1=$r['productid'];
				echo'<br>product name=> '.$r['pname'];
				echo'<br>product price=>'.$r['price'];
				echo'<br>product description =>'.$r['description'];
				echo'<br> <a href="userbook.php?pp='.$pp1.'">book</a>';
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

<h1 align="center"><font color="mahogany" face="arial black">OLD PRODUCTS</font></h1>
<hr color="red" > 


<div class="fluid-container">
	
<?php
include"connection.php";
		$q="select * from ad";
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
			echo'<br>ad_id_no=> '.$r['ad_id_no'];
			  $pp1=$r['ad_id_no'];
				echo'<br>product name=> '.$r['uname'];
				echo'<br>product price=>'.$r['uprice'];
				echo'<br>purchase_year=>'.$r['purchase_year'];
				echo'<br>product description =>'.$r['description'];
				echo'<br> <a href="adbook.php?pp='.$pp1.'">book</a>';
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
