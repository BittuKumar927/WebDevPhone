<?php
session_start();
if($_SESSION['uid']!=session_id())
{
header("location:login.php");
}
?>


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

<a   class ="navbar-brand" href="end.php">logout</a>| 
<a  class ="navbar-brand" href="user.php">user profile</a>| 
<a  class ="navbar-brand" href="userallad.php">show all ad </a>| 
<a  class ="navbar-brand" href="uproduct.php">show product and book product</a>|
<a  class ="navbar-brand" href="userpostad.php"> post ad</a>| 
<a  class ="navbar-brand" href="usersefad.php"> My Ad's and delete </a>| 
<a  class ="navbar-brand" href="ubill.php"> show bill of user</a>| 
</div>
</nav> 

<?php
$e1=$n1=$ns1=$n2=$ns2=$d=$ds=$n3=$ns3=$ms='';

function n1check()
{	
    $na=trim($_POST['n1']);
	if(strlen($na)<5)
	{
		return 'no';
	}
	else
	{
		return 'yes';
	}
}
function n2check()
{	
	$pe='/^[0-9]{1,6}$/';
	$n2=trim($_POST['n2']);
	if(!preg_match($pe,$n2))
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
if($_POST['d']!=' ')
{
	$sy=Date('y');
	$ey=Date('y',strtotime($_POST['d']));
	if(($sy-$ey)<0 || ($sy-$ey)>2)
		{
			return 'no';
		}
		else
		{
		 return 'yes';
		}
}
    else
	{
	 return 'no';
	}
}
function n3check()
{
    	$da=trim($_POST['n3']);
         if(strlen($da)<5)
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
		
		
		
		if(n1check()=='yes')
		{
			$n1=$_POST['n1'];
		}
		else
		{
			$ns1=" ** check name";
		}
		
		if(n2check()=='yes')
		{
			$n2=$_POST['n2'];
		}
		else
		{
			$ns2=" ** check price";
		}
		if(dcheck()=='yes')
		{
			$d=Date('y-m-d',strtotime($_POST['d']));
		}
		else
		{
			$ds=" ** check date";
		}
		
		if(n3check()=='yes')
		{
			$n3=$_POST['n3'];
		}
		else
		{
			$ns3=" ** check description";
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
		
		if(n1check()=='yes' && n2check()=='yes' && dcheck()=='yes' 
		&& n3check()=='yes' &&  
		photocheck()=='yes')
		{
			
			$e1=$_POST['e1'];
			include"connection.php";
	$q="insert into ad 
	(email,uname,uprice,purchase_year,description,photo)
	values ('".$e1."','".$n1."','".$n2."','".$d."','".$n3."','".$fadd."')";
	
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
	echo'<script>alert(" thanks for regisration  ")</script>';
		move_uploaded_file($tmpadd,$fadd);
		
		$e1=$n1=$ns1=$n2=$ns2=$d=$ds=$n3=$ns3=$ms='';
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
<br>
<body>
<h1><font color="darkslategray" face="arial black">POST AN AD</font></h1><br>
<form action="" method="POST" enctype="multipart/form-data">
Email of user <br><input type="text" name="e1" value="<?php echo $_SESSION['email']; ?>" readonly ><br><br>
Product Name:<br><input type="text" name="n1" value="<?php echo $n1; ?>">
<span><?php echo $ns1; ?></span> <br><br>

Price:<br><input type="text" name="n2" value="<?php echo $n2; ?>">
<span><?php echo $ns2; ?></span> <br><br>

Purchase Year:<br><input type="date" name="d" value="<?php echo $d; ?>">
<span><?php echo $ds; ?></span> <br><br>

Description:<br><input type="text" name="n3" value="<?php echo $n3; ?>">
<span><?php echo $ns3; ?></span> <br><br>


load image<br><input type="file" name="m" >
<span><?php echo $ms; ?></span>
<br><br>


<input type="submit" name="s">

</form>
</body>