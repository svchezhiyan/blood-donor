<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="/patient/bootstrap-3.3.7/dist/css/bootstrap.min.css">
		<style>
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

.sound{
				animation-name:sound;
				animation-iteration-count:infinite;
				animation-duration:3s;
				animation-delay:1;
				width:300px;
				background-color:orange;
			}
			@keyframes sound{
				10%{
					width:400px;
				}
				
				40%
				{
					width:200px;
				}
				50%{
					width:400px;
				}
			}
				.dhana{
				border:dashed;
				border-color:orange;
				width:400px;
				height:200px;
				
			}
			.bala{
				animation-name:bala;
				animation-iteration-count:infinite;
				animation-duration:1s;
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
.new{
				border:dashed;
				border-color:darkblue;
				width:310px;
				height:300px;
				border-top-left-radius:50px;
				border-bottom-right-radius:50px;
				box-shadow:0px 12px 14px 0px rgba(30,90,79,0.50);
			}
			.color{
				color:cyan;
				font-size:20px;
			}
		
</style></head>
<body><center><marquee><div class="chezhiyan" style="font-size:30px;">WEB BASED INFORMATION SYSTEM FOR BLOOD DONATION</marquee>
	</div>
	<center>

<center><img src="/patient/kvcetlogo.png" width="350px" height="150px"></center>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-user"></span>login</a></li>
			</ul>
			</div>
			</nav>
<center><div class="sound" style="font-size:40px;">report!!!
	</div>
	<div class="new">
<table>
<form method="post" enctype="multipart/form-data">
<tr><td  class="color">comment:</td><td><input type="text_area" name="comment"></td></tr>
<tr><td  class="color">email:</td><td><input type="email" name="email"></td></tr>
<center><tr><td></td><td><button class="bala" name="ok">submit</button></td></tr></center>
</table>
</div>
</center>
</form>
</body>
</html>
<?php
include "db_connectioon.php";
if(isset($_POST['ok']))
{
$sql_stmt=$conn->prepare("INSERT INTO about1(comment,email)value(?,?)"); 
$sql_stmt->bind_param('ss',$comment,$email);
$comment=$_POST['comment'];
$email=$_POST['email'];
$result=$sql_stmt->execute();
 if($result)
{
	echo("success");
	
}
else
{
	echo("unsuccess");
}
}
?>