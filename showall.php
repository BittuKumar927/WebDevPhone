<hr color="red" > 
mysqli_fetch_row
<br> 
<?php
include"connection.php";
		$q="select * from reg ";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_row($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
		while($r=mysqli_fetch_row($sq))
		{
			echo'<br><br>email=> '.$r[0];
			echo' phone=>'.$r[1];
			echo' password =>'.$r[2];
	echo' <img src="'.$r[3].'" width="50" height="50">';
		}
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

<hr color="red" > 
mysqli_fetch_array --0 1  2
<br> 
<?php
include"connection.php";
		$q="select * from reg ";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_array($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
		while($r=mysqli_fetch_array($sq))
		{
			echo'<br><br>email=> '.$r[0];
			echo' phone=>'.$r[1];
			echo' password =>'.$r[2];
	echo' <img src="'.$r[3].'" width="50" height="50">';
		}
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

<hr color="red" > 
mysqli_fetch_array  -- by column name
<br> 
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
		<th>email</th><th>phone</th><th>password</th><th>image</th></tr>';
		while($r=mysqli_fetch_array($sq))
		{
			echo'<tr><th> '.$r['email'].'</th>';
			echo' <th>'.$r['phone'].'</th>';
			echo' <th>'.$r['password'].'</th>';
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


<hr color="red" > 
mysqli_fetch_assoc -- column
<br> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
.x{background-color:cyan;height:200px;margin:10px;}
.a{position:absolute;top:5%;left:5%;width:90%;height:90%;}
.b{position:absolute;top:25%;left:15%;padding:20px;
background:rgba(12,34,123,0.4);color:white;}
</style>



<div class="fluid-container">
	
<?php
include"connection.php";
		$q="select * from reg ";
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
				echo'<br>email=> '.$r['email'];
				echo'<br> phone=>'.$r['phone'];
				echo'<br> password =>'.$r['password'];
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


<hr color="red" > 
mysqli_fetch_object -- column
<br> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
.x{background-color:cyan;height:200px;margin:10px;}
.a{position:absolute;top:5%;left:5%;width:90%;height:90%;}
.b{position:absolute;top:25%;left:15%;padding:20px;
background:rgba(12,34,123,0.4);color:white;}
</style>



<div class="fluid-container">
	
<?php
include"connection.php";
		$q="select * from reg ";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_array($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
			echo'<div class="row">';
	while($r=mysqli_fetch_object($sq))
		{
	echo'<div class="col-md-4">';
		echo'<div class="x">';
			echo'<div class="a">';
				echo' <img src="'.$r->photo.'" width="100%" height="100%">';
			echo'</div>';
			echo'<div class="b">';
				echo'<br>email=> '.$r->email;
				echo'<br> phone=>'.$r->phone;
				echo'<br> password =>'.$r->password;
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