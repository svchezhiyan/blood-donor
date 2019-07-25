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
	            padding:30px;
				border:dashed;
				border-color:darkblue;
				width:410px;
				height:400px;
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
	<center><div class="sound" style="font-size:40px;">Register!!!
</div>
<!-- <center><img src="/patient/kvcetlogo.png" width="450px" height="150px"></center> -->
<div class="nav-menu">
<div id="nav-sub-menus"><a href="index.php">Home</a></div>
<div class="active" id="nav-sub-menus"><a href="login.php">Login</a></div>
<div style="float:right" id="nav-sub-menus"><a href="about.php">About</a></div>
</div>
<div class="new">
<table>
<form method="post" enctype="multipart/form-data">
<tr><td  class="color">Name:</td><td><input type="text" name="name" autofocus></td></tr>
<tr><td class="color">email:</td><td><input type="email" name="email"></td></tr>
<tr><td class="color">password:</td><td><input type="text" name="password"></td></tr>
<tr><td class="color">gender:</td><td><select name="gender">
<option>--select--</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</td></tr>
<tr><td class="color"> Date of birth:</td><td><input type="date" name="date_of_birth"></td></tr>
<tr><td class="color">Age</td><td><input type="number" name="age"></td></tr>
<tr><td class="color">state</td><td><input  type="text" name="state"></td></tr>
<tr><td class="color">address:</td><td><input type="text" name="address"></td></tr>
<tr><td class="color">phonenumber:</td><td><input type="number" name="mobile_no"></td></tr>
<tr><td class="color">blood group:</td><td><select name="bg">
<option>--select--</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="o+">o+</option>
<option value="o-">o-</option>
</select>
<tr><td class="color">zip code:</td><td><input type="number" name="zip_code"></td></tr>
 <tr><td class="color">Patient pic:</td><td><input type="file" name="img"></td></tr><br>
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
echo $_POST['password'];
$sql_stmt=$conn->prepare("INSERT INTO user1(name,email,password,gender,date_of_birth,age,state,address,mobile_no,blood_group,zip_code,patient_pic) values(?,?,?,?,?,?,?,?,?,?,?,?)");
$sql_stmt->bind_param('ssssssssssss',$name,$email,$password,$gender,$date_of_birth,$age,$state,$address,$mobile_no,$blood_group,$zip_code,$patient_pic1);
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$date_of_birth=$_POST['date_of_birth'];
$age=$_POST['age'];
$state=$_POST['state'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];
$blood_group=$_POST['bg'];
$zip_code=$_POST['zip_code'];
$patient_pic1="\project\blood donor\patient\pic".$_FILES['img']['name'];
$result=$sql_stmt->execute();

if($result)
{
	$patient_pic="E:/xampp/htdocs/project/blood donor/patient/pic".$_FILES['img']['name'];
	if(move_uploaded_file($_FILES['img']['tmp_name'],$patient_pic))
				{
					echo "img is uploaded!!!";
				}
				else
				{
					echo "image is not uploaded!!!";
				}
	echo "One Row affected!";
}
else
{
	echo "Row is not inserted!";
}
}
?>