
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



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
<a class ="navbar-brand" href="adbill.php"> show bill</a>| 
</div>
</div>
</nav> 

<br>
<br>
<?php
$a=$_SESSION['a'];
echo'<font size="5" color="red">welcome </font>'.$a;
?>
<hr color="red" >
<?php
$ns=$ns1=$es=$ps=$pas=$ms='';

function ncheck()
{	
	$na='/^[a-zA-Z ]*$/';
	$n=trim($_POST['n']);
	if(!preg_match($na,$n) || strlen($n)==0 )
		{
			return 'no';
		}
		else
		{
		 return 'yes';
		}
}
function n1check()
{	
	$na='/^[a-zA-Z ]*$/';
	$n=trim($_POST['n']);
	if(!preg_match($na,$n) || strlen($n)==0 )
		{
			return 'no';
		}
		else
		{
		 return 'yes';
		}
}
function echeck()
{	
	$ne='/^[a-zA-Z0-9._-]*\@[a-zA-Z.]*\.[a-zA-Z]{2,6}$/';
	$e=trim($_POST['e']);
	if(!preg_match($ne,$e) )
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
	$pe='/^[0-9]{10,10}$/';
	$p=trim($_POST['p']);
	if(!preg_match($pe,$p) || strlen($p)==0)
		{
			return 'no';
		}
		else
		{
		 return 'yes';
		}
}

function pacheck()
{
	$pa=trim($_POST['pa']);
	if(strlen($pa)<4)
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
			return 'yy';
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
		
		if(n1check()=='yes')
		{
			$n1=$_POST['n1'];
		}
		else
		{
			$ns1=" ** check name";
		}
		if(echeck()=='yes')
		{
			$e=$_POST['e'];
		}
		else
		{
			$es=" ** check email";
		}
		
		if(pcheck()=='yes')
		{
			$p=$_POST['p'];
		}
		else
		{
			$ps=" ** check phone";
		}
		
		if(pacheck()=='yes')
		{
			$pa=$_POST['pa'];
		}
		else
		{
			$pas=" ** check password";
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
		
		if(ncheck()=='yes' && n1check()=='yes' && echeck()=='yes' && pcheck()=='yes' 
		&& pacheck()=='yes' &&  
		photocheck()=='yes')
		{
			
			include"connection.php";
	
	$q="update reg set phone='".$p."' , password='".$pa."', photo='".$fadd."'
	where email='".$e."'";
	
	
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
	echo'<script>alert(" thanks for updating  ")</script>';
		move_uploaded_file($tmpadd,$fadd);
		
		$ns=$ns=$es=$ps=$pas=$ms='';
	}
	else
	{
		echo mysqli_error($connection);
	}
		}
		
		else if(ncheck()=='yes' && n1check()=='yes' &&echeck()=='yes' && pcheck()=='yes' 
		&& pacheck()=='yes' &&  
		photocheck()=='yy')
		{
				include"connection.php";
	
	$q="update reg set firstname='".$n."' , secondname='".$n1."' ,phone='".$p."' , password='".$pa."'
	where email='".$e."'";
	
	
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
	echo'<script>alert(" thanks for updating  ")</script>';
				
		$ns=$ns1=$es=$ps=$pas=$ms='';
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

<?php
if(isset($_GET['au']))
{
	$uu=$_GET['au'];
	include"connection.php";
	$q="select *  from reg where email='".$uu."'";
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
		if(mysqli_fetch_array($sq)>0)
			{
			$sq=mysqli_query($connection,$q);
		
		while($r=mysqli_fetch_array($sq))
		{
		echo'	
			<form action="" method="POST" enctype="multipart/form-data">
			firstname:<input type="text" name="n" value="'.$r['firstname'].'" >
            <span><?php echo $ns; ?></span> <br><br>
			secondname:<input type="text" name="n1" value="'.$r['secondname'].'" >
            <span><?php echo $ns1; ?></span> <br><br>

email:<input type="text" name="e" value="'.$r['email'].'" readonly>
<span><?php echo $es; ?></span> <br><br>

phone no:<input type="text" name="p" maxlength="10" value="'.$r['phone'].'">
<span><?php echo $ps; ?></span> <br><br>

password[at least 4 character ]
<input type="text" name="pa" value="'.$r['password'].'">
<span><?php echo $pas; ?></span> <br><br>

 <img src="'.$r['photo'].'" width="50" height="50"><br>
load image<input type="file" name="m" >
<span><?php echo $ms; ?></span>
<br><br>


<input type="submit" name="s">

</form>';
			
			
		}
		
			}
			else
			{
				echo' no record found';
			}
	}
	else
	{
		echo mysqli_error($connection);;
	}
}
else
{
	header("location:aduser.php");
}
?>