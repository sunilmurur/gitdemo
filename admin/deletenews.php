<?php
session_start();
include("dbconnect.php");
$adminid=$_SESSION["adminid"];
$news_id=$_GET["news_id"];
$query="UPDATE news_tbl SET deleted='1',deleted_by_id='$adminid' where news_id='$news_id'";
$result=$link->query($query);
header("location:viewnews.php?val=1");
?>