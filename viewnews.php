<!DOCTYPE html>
<html>
<head>
	<?php
	include("admin/dbconnect.php");
	?>
	<title></title>
</head>
<body>
<form method="post" action="viewnewsdetails.php">
<table border="1">
<tr>
	<td>News Title:</td>
	<td>News Image:</td>
</tr>
<?php
$viewquery="SELECT news_id from news_display_tbl where deleted='0'";
$viewresult=$link->query($viewquery);
while($viewrow=mysqli_fetch_array($viewresult))
{
	$newsid=$viewrow['news_id'];

$nviewquery="SELECT news_title,news_image from news_tbl where news_id='$newsid'";
$nviewresult=$link->query($nviewquery);
while($nviewrow=mysqli_fetch_array($nviewresult))
{
	$newstitle=$nviewrow['news_title'];
	$newsimage=$nviewrow['news_image'];
?>
<tr>
	<td><a href="viewnewsdetails.php?newsid=<?php echo $newsid; ?>"><?php echo $newstitle; ?></a></td>
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
			<td>
		<img src="admin/newsimage/<?php echo $newsimage;?>" style="height: 100px;width:100px;">
	</td>
	
	<?php
	}
	?>
	
<?php
}
?>
<?php
}
?>
</tr>
</table>
</form>
</body>
</html>