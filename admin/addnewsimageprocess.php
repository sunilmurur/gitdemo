<?php
session_start();
include("dbconnect.php");
$adminid=$_SESSION["adminid"];
$newsid=$_POST["newsid"];



$files="";
$flag=0;
 
 $randomNo=rand(1,4000);
 echo $prdimage=$randomNo."-".pathinfo($_FILES["newsimage"]["name"],PATHINFO_FILENAME);
 move_uploaded_file($_FILES["newsimage"]["tmp_name"],"addnewsimage/".$prdimage.".jpg");
 
$neimage=$prdimage.".jpg";

echo $imagequery="INSERT INTO news_image_tbl(news_id,news_image,inserted_by_id)VALUES('$newsid','$neimage','$adminid')";
$imageresult=$link->query($imagequery);
header("location:addnewsimage.php?newsid=$newsid");


?>