<?php
session_start();
include("dbconnect.php");
$neimage="";
$admin_id = $_SESSION["adminid"];
$newsid=$_POST['nid'];
$newstitle=$_POST['nname'];
$newsdescription=$_POST['ndes'];
//$newsimage=$_POST['news_image'];
$files="";
$flag=0;
 
 $randomNo=rand(1,4000);
 if($_FILES["nimage"]["name"]!="")
 {
 	$prdimage=$randomNo."-".pathinfo($_FILES["nimage"]["name"],PATHINFO_FILENAME);
 	move_uploaded_file($_FILES["nimage"]["tmp_name"],"newsimage/".$prdimage.".jpg");
	$neimage=$prdimage.".jpg";
 }
echo "<br/>";
$query="UPDATE news_tbl SET news_title='$newstitle',news_description='$newsdescription'";
if($_FILES["nimage"]["name"]!="")
{
 	$query=$query.",news_image='$neimage'";
}
  	$query=$query.",updated_by_id='$admin_id' where news_id='$newsid'";

	$result=$link->query($query);
	header("location:editnews.php?val=1&newsid=$newsid");
?>