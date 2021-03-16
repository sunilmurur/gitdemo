<!DOCTYPE html>
<html>
<head>
<?php
include("dbconnect.php");
include("stylesheet.php");
$newsid=$_GET['newsid'];

?>
	<title></title>
</head>
<body>
	<?php 
	include("left_panel.php");
	include("header.php");
	include("below_header.php");

	?>
	<?php
	if(isset($_GET['val']))
	{
		?><div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> Deleted Successfully......
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
	<?php
	}
	
	?>
<div class="content mt-3">	
<table class="table table-striped">
	<tr>
		<td>News Id</td>
		<td>News Image</td>
		<td>Delete</td>
	</tr>

<form method="post" action="addnewsimageprocess.php" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $newsid;?>" name="newsid">
<input type="file" name="newsimage" id="newsimage" required>
<input type="submit" value="Submit" name="submit" class="btn btn-primary">
</form>
<?php 
$viewimagequery="SELECT news_image_id,news_image from news_image_tbl where news_id='$newsid' and deleted='0'";
$viewresult=$link->query($viewimagequery);
while($viewrow=mysqli_fetch_array($viewresult))
{
	$news_image_id=$viewrow['news_image_id'];
	$news_image=$viewrow['news_image'];
?>

<input type="hidden" value="<?php echo $news_image_id?>" name="newsimageid">
<tr>
	<td><?php echo $newsid;?></td>
	<td><img src="addnewsimage/<?php echo $news_image;?>" style="height:100px;width:100px;"></td><br/>
	<td><a href="deletenewsimage.php?newsimageid=<?php echo $news_image_id;?>&newsid=<?php echo $newsid;?>" class="btn btn-danger">Delete</a></td>
	

	<?php
}
?>
</tr>
</table>
</div>
<?php
include("footer.php");
include("js_files.php");
?>

</body>
</html>