<?php session_start();
if(!$_SESSION['name'])
{
header('location:login.php');	
} 
 ?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="/blood donor/bootstrap-3.3.7/dist/css/bootstrap.min.css">
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

.right-nav{
	position:absolute;
	right:0;
	top:30%;
	height:70%;
	width:250px;
	z-index:1;
	background-color:brown;
	text-align:center;
}
#profile{
	color:white;
	font-size:20px;
	font-family:sans-serif;
}
#right-sub-nav{
	margin-top:10px;
	
	}
#right-sub-nav a{
	color:white;
	font-size:18px;
	text-decoration:none;
}
</style>
</head>
<center><marquee><div class="chezhiyan" style="font-size:30px;">WEB BASED INFORMATION SYSTEM FOR BLOOD DONATION</marquee>
	</div>
<body>
<form method="post">
<div class="nav-menu">
<div class="active" id="nav-sub-menus"><a href="home.php">Home</a></div>
<div id="nav-sub-menus"><a href=""><button class="signout-button" name="signout">Signout</button></a></div>
<div style="float:right" id="nav-sub-menus"><a href="about.php">About</a></div>
</div>
<div class="right-nav">
<div id="profile"><img src="<?php echo $_SESSION['picture'];?>" width="80px" height="80px" style="border-radius:50%;border-color:red;" border="5px"><br><?php echo $_SESSION['name'];?></div>
<div id="right-sub-nav"><a href="notification.php">Notification</a><div>
<div id="right-sub-nav"><a href="msg.php">Blood Request</a></div>
<div id="right-sub-nav"><a href="sample.php">logs</a></div>
</div>
</form>

</body>
</html>
<?php
if(isset($_POST['signout']))
{
	session_destroy();
	header('location:login.php');
}
?>