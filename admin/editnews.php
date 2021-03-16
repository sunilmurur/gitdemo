<html>
<head>
<?php    
include("stylesheet.php");
include("dbconnect.php");
?>
</head>
<body>
<?php
include("left_panel.php");
include("header.php");
include("below_header.php");
if(isset($_GET['val']))
{
		?>
		<div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> Edited Successfully......
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
<?php
}
?>
<?php
$news_id="";
$news_name="";
$news_description="";
$news_id = $_GET['newsid'];
$newsquery="SELECT news_id,news_title,news_description,news_image from news_tbl where news_id='$news_id'";
$newsresult=$link->query($newsquery);
while($row=mysqli_fetch_array($newsresult))
{
		//$newsid=$row['news_id'];
		 $newsname=$row['news_title'];
		 $newsdes=$row['news_description'];
		 $news_image=$row['news_image'];
}
?>
	
<div class="content mt-3">
<div class="animated fadeIn">	
<div class="row">
<div class="col-lg-3">
</div>	
 <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Edit News</strong></div>
                            <div class="card-body card-block">
                            	<form method="post" action="editprocess.php" enctype="multipart/form-data">
                                <div class="form-group">
                                	<label for="company" class=" form-control-label"> News Title:</label>
                                	<input type="hidden" name="nid" value="<?php echo $news_id;?>">
                                	<input type="text" name="nname" value="<?php echo $newsname; ?>" required class="form-control">
                                	
                                	</div>
                                    <div class="form-group">
                                    	<label for="vat" class=" form-control-label">News Image:</label>
                                    	<input type="file" name="nimage" id="nimage" class="form-control">
                                    	<img src="newsimage/<?php echo $news_image; ?>">
                                    </div>
                                        <div class="form-group">
                                        	<label for="street" class=" form-control-label">News Description:</label>
                                        	<input type="text" name="ndes" value="<?php echo $newsdes;?>"required class="form-control">
                                        </div>
                                        <div class="form-group">
                                        	
                                        	<input type="submit" value="submit" name="submit" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
    include("footer.php");
    include("js_files.php");
?>
</body>
</html>


	