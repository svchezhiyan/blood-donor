<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/patient/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css"> 
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
				width:70px;
				height:70px;
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
				height:60px;
				border-radius:50%;
				border-width:1px;
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
				border-color:red;
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
				position:absolute;;
				top:50%;
				left:50%;
				transform:translate(-50%);
				width:300px;
				height:200px;
				border-top-left-radius:20px;
				background-color:red;
				border-bottom-right-radius:20px;
				box-shadow:0px 12px 14px 0px rgba(20,70,76,0.40);
				text-align:center;
				
			}
			.sign-pannel div{
				margin-top:10px;
			}
			
				.blink{
				position:absolute;
				top:40%;
				left:50%;
				transform:translate(-50%);
				animation-name:blink;
				animation-iteration-count:infinite;
				animation-duration:3s;
				animation-delay:1;
				width:400px;
				background-color:blue;
			}

			@keyframes blink{
				
				50%
				{
					width:400px;
				}
				40%{
					width:150px;
				}
				
		
			.color{
				background-color:green;
			}
			
			.bala{
				animation-name:bala;
				animation-iteration-count:infinite;
				animation-duration:1s;
				color:red;
			}
			}
			@keyframes bala{
				from{
					color:red;
				}
				to
				{
					color:yellow;
				}
			}
		</style></head>
	
	<body><center><marquee><div class="chezhiyan" style="font-size:30px;">WEB BASED INFORMATION SYSTEM FOR BLOOD DONATION</marquee></div>
<!-- <center><img src="/patient/kvcetlogo.png" width="350px" height="150px"></center> -->
<div class="nav-menu">
<div id="nav-sub-menus"><a href="index.php">Home</a></div>
<div class="active" id="nav-sub-menus"><a href="login.php">Login</a></div>
<div style="float:right" id="nav-sub-menus"><a href="about.php">About</a></div>
<div id="nav-sub-menus"><a href="admin.php">Admin</a></div>
</div>

	<form method="post">
<center><div class="blink" style="font-size:40px;">Login!!!
	</div>	
<div class="sign-pannel">
<div class="color">username</div>
<div><input type="text" name="username" autofocus></div>
<div class="color">password</div>
<div><input type="password" name="password"></div>
<div><button class="lavu" name="ok">login</button></div>
<div class="bala"><button><a href="register.php">register</a></button></div></div>
</form>
</body>
</html>
<?php
include "db_connectioon.php";
session_start();
if(isset($_POST['ok']))
{
$sql_stmt=$conn->prepare("select name,patient_pic,blood_group,email from user1 where name=? and password=?");
$sql_stmt->bind_param('ss',$username,$password); 
$username=$_POST['username'];
$password=$_POST['password'];
$sql_stmt->execute();
$sql_stmt->store_result();
$sql_stmt->bind_result($name,$picture,$blood_group,$email);
$result=$sql_stmt->fetch();

if($result)
{
	$_SESSION['name']=$name;
	$_SESSION['picture']=$picture;
	$_SESSION['blood_group']=$blood_group;
	$_SESSION['email']=$email;
	header('location:home.php');
}
else
{
	echo "unsuccess!";
}
}
?>
