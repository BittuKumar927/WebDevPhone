<html>
<head>
<title>
</title>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

#ma{
left:0%;
top:0%;
width:100%;
height:20%;
position:fixed;
}
</style>
</head>
<body>

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
<a class ="navbar-brand" href="end.php">logout</a>|
<a class ="navbar-brand" href="admin.php">mainpage of admin</a>|
<a class ="navbar-brand" href="aduser.php">user record</a>|
<a class ="navbar-brand" href="adproduct.php">insert and show product</a>|
<a class ="navbar-brand" href="adminad.php">show all ad and delete</a>| 
<a class ="navbar-brand"href="adbill.php"> show bill</a>| 
</div>
</div>
</nav> 
<br>
<br>
<?php
$a=$_SESSION['a'];
echo'<font size="5" color="red">welcome</font> '.$a;
?>


<?php
$n=$ns=$p=$ps=$d=$ds=$ms='';

function ncheck()
{
	$na=trim($_POST['n']);
	if(strlen($na)<4)
	{
		return 'no';
	}
	else
	{
		return 'yes';
	}
}
function pcheck()
{	
	$pc='/^[0-9]{1,6}$/';
	$p=trim($_POST['p']);
	if(!preg_match($pc,$p) )
		{
			return 'no';
		}
		else
		{
		 return 'yes';
		}
}

function dcheck()
{
	$d=trim($_POST['d']);

	if(strlen($d)<4)
	{
		return 'no';
	}
	else
	{
		return 'yes';
	}
}



function photocheck()
{
		if($_FILES['m']['name']!='')
		{
				$name=$_FILES['m']['name'];
				$mp=strrpos($name,".");
				$ext=substr($name,$mp+1,strlen($name));
				$ex=array('jpg','png','bmp','gif','jpeg');
				if(in_array($ext,$ex))
				{
					return 'yes';
				}
				else
				{
					return 'no';
				}
			}
		else
		{
			return 'no';
		}

}

if(isset($_POST['s']))
{
		
		
		if(ncheck()=='yes')
		{
			$n=$_POST['n'];
		}
		else
		{
			$ns=" ** check name";
		}
		
		if(pcheck()=='yes')
		{
			$p=$_POST['p'];
		}
		else
		{
			$ps=" ** check price";
		}
		
		if(dcheck()=='yes')
		{
			$d=$_POST['d'];
		}
		else
		{
			$ds=" ** check description";
		}
		if(photocheck()=='yes')
		{
			$name=$_FILES['m']['name'];
			$tmpadd=$_FILES['m']['tmp_name'];
			$fadd='load/'.uniqid().$name;
		}
		else
		{
			$ms=" ** check image ";
		}
		
		
		if(ncheck()=='yes' && pcheck()=='yes' 
		&& dcheck()=='yes' &&  photocheck()=='yes')
		{
			
			include"connection.php";
	$q="insert into product 
	(pname, price, description, photo)
	values ('".$n."','".$p."','".$d."','".$fadd."')";
	
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
	echo'<script>alert(" product added  ")</script>';
		move_uploaded_file($tmpadd,$fadd);
		
		$n=$ns=$p=$ps=$d=$ds=$ms='';
	}
	else
	{
		echo mysqli_error($connection);
	}
	
		
		
		}
		else
		{
			echo'<script>alert(" check ")</script>';
		}
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<br>Product Name:<input type="text" name="n" value="<?php echo $n; ?>">
<span><?php echo $ns; ?></span> <br><br>

Price:<input type="text" name="p" maxlength="10" value="<?php echo $p; ?>">
<span><?php echo $ps; ?></span> <br><br>

Description:
<input type="text" name="d" value="<?php echo $d; ?>">
<span><?php echo $ds; ?></span> <br><br>


load image<input type="file" name="m" >
<span><?php echo $ms; ?></span>
<br><br>


<input type="submit" name="s">

</form>


<?php
include"connection.php";
		$q="select * from product ";
		$sq=mysqli_query($connection,$q);
	if($sq)
	{		
			if(mysqli_fetch_array($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
		echo'<table border="red"><tr bgcolor="cyan">
		<th>product id</th><th>product name</th><th>product price</th><th>product description</th>
		<th>photo</th>
		<th>delete</th></tr>';
		while($r=mysqli_fetch_array($sq))
		{
			echo'<tr><th> '.$r['productid'].'</th>';
			$pp=$r['productid'];
			echo' <th>'.$r['pname'].'</th>';
			echo' <th>'.$r['price'].'</th>';
			echo' <th>'.$r['description'].'</th>';
	echo'<th> <img src="'.$r['photo'].'" width="50" height="50"></th>';
	echo'<th>
	<a href="pdel.php?pp=' .$pp. ' ">delete</a></th></tr>';
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

</body>
</html>