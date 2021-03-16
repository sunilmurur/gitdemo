<?php
include("dbconnect.php");
$newsid=$_GET['newsid'];
$newsimageid=$_GET['newsimageid'];
//echo $newsimageid;
echo $removequery="UPDATE news_image_tbl SET deleted='1' where news_image_id='$newsimageid'";
$removeresult=$link->query($removequery);
header("location:addnewsimage.php?val=1&newsimageid=$newsimageid&newsid=$newsid");

?>