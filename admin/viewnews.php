<!DOCTYPE html>
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
	//include("below_header.php");
	?>
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
	

<form method="post" action="displayids.php">
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
	<?php
	if(isset($_GET['success']))
	{
		?><div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> Inserted Successfully......
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
	<?php
	}
	?>
	<?php
	if(isset($_GET['err']))
	{
		?><div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">ERROR</span> <b>Select Atleast One News</b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
	<?php
	}
	?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
								<table id="bootstrap-data-table-export" class="table">
									<thead>
										<tr>
											<th>Title</th>
											<th>Description</th>
											<th>News Image</th>
											<th>Edit/Delete</th>
											<th>Checkbox</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$query="SELECT news_id,news_title,news_description,news_image from news_tbl where deleted='0'";
									$result=$link->query($query);
									while($row=mysqli_fetch_array($result))
									{	
										$newsid=$row['news_id'];
										$newsname=$row['news_title'];
										$newsdescription=$row['news_description'];
										$news_image=$row['news_image'];
										$flag=0;
										$newsdisplayquery="SELECT news_id from news_display_tbl where news_id='$newsid'";
										$newsdisplayresult=$link->query($newsdisplayquery);
										while($nrow=mysqli_fetch_array($newsdisplayresult))
										{
											$flag=1;
										}
										?>

										<tr>
											<td><?php echo $newsname; ?></td>
											<td><?php echo $newsdescription; ?></td>
											<?php
											if($news_image=="")
											{
												?>
												<td></td>
												<?php
											}
											else
											{
											?>
											<td><img src="newsimage/<?php echo $news_image; ?>" style="height: 150px;width: 150px;"></td><?php
											}
											?>
											<td><button type="button" name="yes"  onclick="confirm_func(<?php echo $newsid; ?>)"><i class="fa fa-trash"></i></button><br/><br/>
											<a class="fa fa-pencil-square-o" href="editnews.php?newsid=<?php echo $newsid ?>" ><i></i></a><br/>
			<!-- <button type="button" name="button" ></button> -->
											<a href="addnewsimage.php?newsid=<?php echo $newsid ?>" class="fa fa-file-image-o"><b>Add Sub Images</b></a>	
											</td>

											<td>
											<input type="checkbox" name="checkbox[]" id="chkbx" <?php if($flag==1){ ?> checked <?php } ?> value="<?php echo $newsid; ?>" /> 
											</td>	
										</tr>
									<?php
									}
									?>
									<div style="text-align:right">
									<input type="submit" value="Submit" name="submit" class="btn btn-primary" required>
									</div>
								</form>
							</tbody>
						</table>
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
<script type="text/javascript">
	
	function confirm_func(newsid)

	{
		//alert("hi"+newsid);
		var result=confirm("Are you sure you want to delete?");
		if(result)
		{
			
			
			window.location.href="deletenews.php?news_id="+newsid;//newsid_id 
		}
	}
</script>
</body>
</html>