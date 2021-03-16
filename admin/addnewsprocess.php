<?php
session_start();
include("dbconnect.php");

$newstitle="";
$newsdescription="";
$neimage="";
$admin_id = $_SESSION["adminid"];
$newstitle=$_POST['ntitle'];
//$newsdescription=$_POST['ndescription'];
$newsdescription=$_POST['p3'];

$files="";
$flag=0;
$i=0;
	
	  $prdimage=pathinfo($_FILES["nimage"]["name"],PATHINFO_FILENAME); 
	  if($prdimage=="")
	  {
	  	$query="INSERT INTO news_tbl(news_title,news_description,news_image,inserted_by_id)VALUES('$newstitle','$newsdescription','$neimage','$admin_id')";
			$result=$link->query($query);
	  }
	  else
	  {
 $randomNo=rand(1,4000);
   $prdimage=$randomNo."-".pathinfo($_FILES["nimage"]["name"],PATHINFO_FILENAME);
 move_uploaded_file($_FILES["nimage"]["tmp_name"],"newsimage/".$prdimage.".jpg");
 
 
  echo $neimage=$prdimage.".jpg";


$query="INSERT INTO news_tbl(news_title,news_description,news_image,inserted_by_id)VALUES('$newstitle','$newsdescription','$neimage','$admin_id')";
$result=$link->query($query);
}
header("location:addnews.php?val=1");

?>

