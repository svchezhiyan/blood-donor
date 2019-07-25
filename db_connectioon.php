<?php
$hostname="localhost";
$user="root";
$password="";
$db_name="blood_donor";

$conn=mysqli_connect($hostname,$user,$password) or die("Connection error");
mysqli_select_db($conn,$db_name);
if($conn)
{
	echo "Connection is success!";
}
?>