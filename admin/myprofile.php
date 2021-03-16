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
	include("below_header.php");
	?>

<?php
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
$query="SELECT * FROM admin_tbl";
$result=$link->query($query);
while($row=mysqli_fetch_array($result))
{
	$adminname=$row['admin_name'];
	$adminpassword=$row['admin_pass'];
	$adminphone=$row['phone_number'];
	$adminemail=$row['email'];
	$adminaddress=$row['address'];



}

?>


<div class="content mt-3">
            <div class="animated fadeIn">

					<div class="row">
						<div class="col-lg-3">
						</div>
					<div class="col-lg-6">
		                  <div class="card">
                            <div class="card-header"><strong>My profile</strong></div>
                            <div class="card-body card-block">

                            <form method="post" action="myprofileprocess.php">
                                <div class="form-group">
                                	<label for="company" class=" form-control-label">User name:</label>

                                	<input type="text" name="adname" value="<?php echo $adminname;?>" class="form-control" placeholder="User name">
                                	
                                </div>

                                <div class="form-group">
                                	<label for="company" class=" form-control-label">Password:</label>

                                	<input type="text" name="adpass" value="<?php echo $adminpassword;?>" class="form-control" placeholder="Password">
                                	
                                </div>

                                  <div class="form-group">
                                	<label for="company" class=" form-control-label">Phone number:</label>

                                	<input type="text" name="adphone" value="<?php echo $adminphone;?>" class="form-control" placeholder="Phone">
                                	
                                </div>

                                	 <div class="form-group">
                                	<label for="company" class=" form-control-label">Email:</label>

                                	<input type="text" name="ademail" value="<?php echo $adminemail;?>" class="form-control" placeholder="Password">
                                	
                                </div>

                                 <div class="form-group">
                                	<label for="company" class=" form-control-label">Address:</label>

                                	<input type="text" name="adaddress" value="<?php echo $adminaddress;?>" class="form-control" placeholder="Password">
                                	
                                </div>


                                <div class="form-group">
                                	<input type="submit" name="submit" value="submit" class="btn btn-primary">
                                </div>
                            </form>
							</div>
                          <div class="col-lg-3">
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