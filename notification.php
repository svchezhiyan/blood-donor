<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><style>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="/patient/bootstrap-3.3.7/dist/css/bootstrap.min.css">
		<style type="text/css">
		.aaa{
				box-shadow:0px 12px 14px 0px rgba(0,0,0,0.50);
				margin-top:50px;
			}
			.aaa tr th{
				color:white;
				background-color:orange;
				font-size:25px;
			}
			.aaa tr td{
				font-size:20px;
			}
			.design{
				border:dashed;
				border-color:orange;
				width:400px;
				height:300px;
				border-top-left-radius:50px;
				border-bottom-right-radius:50px;
				box-shadow:0px 12px 14px 0px rgba(30,90,79,0.50);
			}

			
		</style>
		</head>
<body>
<center><table class="aaa"  border='1'></td></tr>
<tr><th>Username</th><th>Blood_group</th><th>Address</th><th>Date</th><th>Time</th></tr>
</center>
<?php
include "db_connectioon.php";

$sql_stmt=$conn->prepare("SELECT username,blood_group,address,date,time FROM blood_request1 WHERE blood_group=?");
$sql_stmt->bind_param('s',$_SESSION['blood_group']);
$sql_stmt->execute();
$sql_stmt->store_result();
$sql_stmt->bind_result($username,$blood,$address,$date,$time);
if($sql_stmt)
{
	
	while($sql_stmt->fetch())
	{
	
	echo "<script>window.alert('i am execute!');</script>";
	echo "<tr class='my_style'><td>$username</td><td>$blood</td><td>$address</td><td>$date</td><td>$time</td></tr>";
	}
	echo"</table>";
}
else
{
 echo "<script>window.alert('i am notexecuteexecute!');</script>";
}
$sql_stmt->free_result();
$sql_stmt->close();
$conn->close();

?>
</body>
</html>