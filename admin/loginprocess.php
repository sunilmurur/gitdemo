<?php
include("dbconnect.php");
$usname=$_POST['uname'];
$uspass=$_POST['upass'];
$flag=0;
$query="SELECT admin_id from admin_tbl where admin_name='$usname' and admin_pass='$uspass'";
$result=$link->query($query);
while($row=mysqli_fetch_array($result))
{
	$reg_id=$row['admin_id'];
	$flag=1;
}
if($flag==1)
{
	session_start();
	$_SESSION["adminid"]=$reg_id;
	echo "Session has started";
	header("location:index.php");
}
else
{
	//echo "invalid login";
	header("location:login.php?val=1");
}
//echo "reg_id";




?>