<head>
<style>

#ma{
left:0%;
top:0%;
width:100%;
height:10%;
position:fixed;
background-color:black;
}

.m{
height:70%;

position:absolute;
top:15%;
text-align:center;
line-height:50px;
font-size:1.2vw;
cursor:pointer;
}
#m1{
left:2%;
width:7%;
}

#m2{
left:9%;width:9%;
}
#m3{
left:18%;
width:12%;
}
#m4{
left:30%;
width:7%;
}
#m5{
left:37%;
width:7%;
}

.m a{text-decoration:none;color:white;}

#m1:hover {
background-color:red;
}
#m2:hover {
background-color:red;
}
#m3:hover {
background-color:red;
}
#m4:hover {
background-color:red;
}
#m5:hover {
background-color:red;
}
#box{
height:90%;
width:100%;
position:absolute;
top:10%;
left:0%;
}
#box1{
height:90%;
width:100%;
position:absolute;
color:red;
top:10%;
left:20%;
}
</style>
</head>


<?php
$n=$ns=$n1=$ns1=$e=$es=$p=$ps=$pa=$pas=$ms='';

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
	$na1='/^[a-zA-Z ]*$/';
	$n1=trim($_POST['n1']);
	if(!preg_match($na1,$n1) || strlen($n1)==0 )
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
	$q="insert into reg 
	(firstname,secondname,email,phone,password,photo)
	values ('".$n."','".$n1."','".$e."','".$p."','".$pa."','".$fadd."')";
	
	$sq=mysqli_query($connection,$q);
	if($sq)
	{
	echo'<script>alert(" thanks for regisration  ")</script>';
		move_uploaded_file($tmpadd,$fadd);
		
		$n=$ns=$n1=$ns1=$e=$es=$p=$ps=$pa=$pas=$ms='';
	}
	else
	{
		echo mysqli_error($connection);
		echo'<script>alert(" check email id already reintegrated ")</script>';
	}
		}
		else
		{
			echo'<script>alert(" check ")</script>';
		}
}
?>
<body>


<div id="ma">
<div class="m" id="m1"><a href="index.php">HOME</a></div>
<div class="m" id="m2"><a href="product.php">OUR PRODUCT</a></div>
<div class="m" id="m3" ><a href="reg.php">REGISTRATION</a></div>
<div class="m" id="m4" ><a href="login.php">LOGIN</a></div>
<div class="m" id="m5" ><a href="contact.php">CONTACT</a></div>
</div>
<div id="box"><img src="a.jpg " height="100%" width="100%" id="m">
<div id="box1"> 
<h1>New Member</h1>
<form action="" method="POST" enctype="multipart/form-data">
<font size="4">First name:</font><br>
<input type="text" name="n" value="<?php echo $n; ?>">
<span><?php echo $ns; ?></span> <br><br>

<font size="4" color="red">Second name:</font><br>
<input type="text" name="n1" value="<?php echo $n1; ?>">
<span><?php echo $ns1; ?></span> <br><br>

<font size="4" color="red">Email Id:</font><br>
<input type="text" name="e" value="<?php echo $e; ?>">
<span><?php echo $es; ?></span> <br><br>

<font size="4" color="red">phone no:</font><br>
<input type="text" name="p" maxlength="10" value="<?php echo $p; ?>">
<span><?php echo $ps; ?></span> <br><br>

<font size="4" color="red">password[at least 4 character ]</font><br>
<input type="text" name="pa" 
value="<?php echo $pa; ?>">
<span><?php echo $pas; ?></span> <br><br>


<font size="4" color="red">load image</font><input type="file" name="m" >
<span><?php echo $ms; ?></span>
<br><br>


<input type="submit" name="s">
</form>
</div>
<div>
</body>