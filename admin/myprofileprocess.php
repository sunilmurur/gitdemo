<?php
include("dbconnect.php");
$adminname=$_POST['adname'];
$adminpass=$_POST['adpass'];
$adminphone=$_POST['adphone'];
$adminaddress=$_POST['adaddress'];
$adminemail=$_POST['ademail'];
echo $query="UPDATE admin_tbl SET admin_name='$adminname',admin_pass='$adminpass',phone_number='$adminphone',address='$adminaddress',email='$adminemail'";
$result=$link->query($query);
header("location:myprofile.php?val=1");

?>
