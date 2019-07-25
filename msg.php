
<?php 
ob_start();
session_start();
if(!$_SESSION['name'])
{
header('location:login.php');	
} 
?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="/patient/bootstrap-3.3.7/dist/css/bootstrap.min.css">
		<style type="text/css">
		.chezhiyan{
				animation-name:chezhiyan;
				animation-iteration-count:infinite;
				animation-duration:1s;
			}
			@keyframes chezhiyan{
				from{
					color:red;
				}
				to
				{
					color:yellow;
				}
			}
.lavu{
	background-color:rgb(100,120,133);
				border-color:none;
				width:60px;
				height:60px;
				border-radius:50%;
				
				border-width:1px;
				
}
				.lavu:hover{
				animation-name:lavu;
				animation-iteration-count:1;
				animation-duration:1s;
		
				background-color:rgb(100,120,133);
				border-color:red;
				width:70px;
				height:70px;
				border-radius:50%;
				border-width:1px;
				background-color:green;
		
			
			}
			@keyframes lavu{
				from{
					border-width:3px;
				}
				to
				{
					border-width:3px;
				}
			}
				.kulla{
				border:dashed;
				border-color:orange;
				width:400px;
				height:200px;
				border-top-left-radius:50px;
				border-bottom-right-radius:50px;
				box-shadow:0px 10px 12px 0px rgba(30,90,79,0.50);
			}
.sound{
				animation-name:sound;
				animation-iteration-count:infinite;
				animation-duration:1s;
			}
			@keyframes sound{
				from{
					color:pink;
				}
				to
				{
					color:black;
				}
			}

.color{
				color:cyan;
				font-size:20px;
			}
             .sign-pannel{
				position:absolute;
				top:50%;
				left:50%;
				transform:translate(-50%);
	
				border:dashed;
				text-align:center;
				border-color:orange;
				width:500px;
				height:330px;
				border-top-left-radius:50px;
				border-bottom-right-radius:50px;
				box-shadow:0px 12px 14px 0px rgba(30,90,79,0.50);
			}
			.color
			{
				color:cyan;
				size:20px;
			}
			
			.aaa{
				position:absolute;
			    top:40%;
			     left:50%;
				 text-align:center;
				 transform:translate(-50%);
				animation-name:aaa;
				animation-iteration-count:infinite;
				animation-duration:3s;
				animation-delay:1;
				width:300px;
				background-color:blue;
			}
			@keyframes aaa{
				10%{
					width:300px;
				}
			}
				40%
				{
					width:200px;
				}
				50%{
					width:300px;
				}
				.chellam{
				animation-name:chellam;
				animation-iteration-count:infinite;
				animation-duration:1s;
				color:white;
			}

</style></head>
<body><center><marquee><div class="chezhiyan" style="font-size:30px;">WEB BASED INFORMATION SYSTEM FOR BLOOD DONATION</marquee></div>
<form method="post">
<div class="nav-menu">
<div class="active" id="nav-sub-menus"><a href="home.php">Home</a></div>
<div id="nav-sub-menus"><button class="signout-button" name="signout">Signout</button></div>
<div style="float:right" id="nav-sub-menus"><a href="#">About</a></div>
</div>
<!--<center><img src="/patient/kvcetlogo.png" width="350px" height="150px"></center	>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<ul class="nav navbar-nav">
</ul>
</div>-->
</nav>
</div>
	</form>
	
<form method="post">
<center><div class="aaa" style="font-size:40px;"> send notification!!!</center>
	</div>
<div class="sign-pannel">
<div class="color">username:</div>
<div><input type="text" name="username" autofocus></div>
<div class="color">blood_group:</div>
<div><select name="blood_group">
<option>--SELECT--</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select></div>
<div class="color">address:</div>
<div><input type="text" name="address"></div>
<div class="color">date:</div>
<div><input type="date" name="date"></div>
<div class="color">time:</div>
<div><input type="time" name="time"></div>
<div><button class="lavu" name="ok">send</button></div>
</div>
</form>
</body>
</html>
<?php
include "db_connectioon.php";
$query=$conn->prepare("SELECT bloodrequest_val FROM user1 WHERE email=?");
$query->bind_param('s',$_SESSION['email']);
$query->execute();
$query->store_result();
$query->bind_result($val);
$query->fetch();
if($val)
{
	echo "<script> window.alert('Already Requested!!!')</script>";
	echo '<form method="post">
			<button style="position:absolute;top:50%;" name="update">DELETE BLOOD REQUEST</button>
			<form>
	';
	if(isset($_POST['update']))
	{
		
		$query_stmt=$conn->prepare("UPDATE user1 set bloodrequest_val=? WHERE email=?");
		$query_stmt->bind_param('is',$val,$mail);
		$mail=$_SESSION['email'];
		$val=0;
        if($query_stmt->execute())
		{
			$query_stmt=$conn->prepare("DELETE FROM blood_request1 WHERE mail=?");
			$query_stmt->bind_param('s',$_SESSION['email']);
			$query_stmt->execute();
		}
	}
}
else
{
	
	echo '<form method="post">
<center><div class="aaa" style="font-size:20px;"> send notification!!!</center>
	</div>
<div class="sign-pannel">
<div class="color">username:</div>
<div><input type="text" name="username" autofocus></div>
<div class="color">blood_group:</div>
<div><select name="blood_group">
<option>--SELECT--</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select></div>
<div class="color">address:</div>
<div><input type="text" name="address"></div>
<div class="color">date:</div>
<div><input type="date" name="date"></div>
<div class="color">time:</div>
<div><input type="time" name="time"></div>
<div><button class="lavu" name="ok">send</button></div>
</div>
</form>';
if(isset($_POST['ok']))
{
	$sql_stmt=$conn->prepare("INSERT INTO blood_request1(username,blood_group,address,date,time,mail) VALUES (?,?,?,?,?,?)");
	$sql_stmt->bind_param('ssssss',$username,$blood_group,$address,$date,$time,$mail);
	$username=$_POST['username'];
	$blood_group=$_POST['blood_group'];
	$address=$_POST['address'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$mail=$_SESSION['email'];
	if($sql_stmt->execute())
	{
		echo"success";
		$query_stmt=$conn->prepare("UPDATE user1 set bloodrequest_val=? WHERE email=?");
		$query_stmt->bind_param('is',$val,$mail);
		$mail=$_SESSION['email'];
		$val=1;
        $query_stmt->execute();
		//$conn->close();
		
		//store logs
		
		$sql_stmt1=$conn->prepare("INSERT INTO user_logs1(time,date,username,blood_group)VALUES(?,?,?,?)");
	$sql_stmt1->bind_param('ssss',$time,$date,$username,$blood_group);
	$time=date("h:i:s A");
	 
	$date=date("Y-m-d");
	$username=$_SESSION['email'];
	$blood_group=$_POST["blood_group"];
	$sql_stmt1->execute();
	}
	
	else
	{
		echo"unsucess";
	}
}

}
if(isset($_POST['signout']))
{
	session_destroy();
	header('location:login.php');
}
?>
