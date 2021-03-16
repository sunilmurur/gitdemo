<!DOCTYPE html>
<html>
<head>
	<?php
	include("admin/dbconnect.php");
	?>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<td>News Title</td>
		<td>News Image</td>
		<td>News Description</td>
	</tr>
<?php
$newsid=$_GET['newsid'];
$newsquery="SELECT news_title,news_image,news_description from news_tbl where news_id='$newsid' and deleted='0'";
$newsresult=$link->query($newsquery);
while($newsrow=mysqli_fetch_array($newsresult))
{
	$newstitle=$newsrow['news_title'];
	$newsimage=$newsrow['news_image'];
	$newsdes=$newsrow['news_description'];
?>
<tr>
	<td><?php echo $newstitle;?></td>
	<?php
		if($newsimage=="")
		{
			?>
			<td></td>
			<?php
		}
		else
		{

			?>
	<td><img src="admin/newsimage/<?php echo $newsimage;?>" style="height: 100px;width:100px;"><br>
	<?php
		}
	 $newsquery1="SELECT news_image from news_image_tbl where news_id='$newsid' and deleted='0'";
		$newsresult1=$link->query($newsquery1);
		while($newsrow1=mysqli_fetch_array($newsresult1))
		{
			 $newsimage1=$newsrow1['news_image'];
			 ?><img src="admin/addnewsimage/<?php echo $newsimage1;?>" style="height: 100px;width:100px;"><br><?php
		}
	?>
	</td>
	<td><?php echo $newsdes;?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>



updated by naveen