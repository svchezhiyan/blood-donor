<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<style>
.mmm
{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%);
	width:400px;
	height:330px;
	background-color:cyan;
	font-size:20px;
	background-color:pink;
}
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
				position:absolute;
				top:40%;
				left:50%;
				transform:translate(-50%);
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


</style>
</head>
<body>
<div style="text-align:center;background-color:brown;height:100px;color:white;font-size:30px;">WEB BASED INFORMATION SYSTEM FOR BLOOD DONATION</div>
<!--<center><img src="/patient/kvcetlogo.png" width="350px" height="150px"></center> -->
<center><div class="sound" style="font-size:40px;">notes!!!</center>
<center><div class="nav-menu">
<div class="active" id="nav-sub-menus"><a href="home.php">Home</a></div> 
<div id="nav-sub-menus"><a href="login.php">Login</a></div>
<div style="float:right" id="nav-sub-menus"><a href="about.php">About</a></div>
</div>
<div class="chezhiyan" style="font-size:30px;position:absolute;top:25%;left:20%;right:20%"><marquee>WEB BASED INFORMATION SYSTEM FOR BLOOD DONATION</marquee></div>
<div class="mmm">The purpose of this study was to develop a blood donation 
information system to assist   in this management of blood donor
 record and easy or control.The distribution of blood in various 
 part of the country. The web based information system for blood 
 donation offers functionalities to quick access to blood donor 
 record collection from various country.This  system provides 
 multiple facilities (ie) maitsining records analysis  of 
 parameter for research  issue  and providing  online information.
 This system enable user to search  to collect the blood donation.
 The registered donor are very small as very easy understand.
</center></div>
</body>
</html>