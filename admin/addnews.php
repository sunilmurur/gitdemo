<!DOCTYPE html>
<html>
<head>
	<?php
	include("stylesheet.php");
	?>
    <script type="text/javascript">
        function calculate_avg()
        {
                var ts = document.getElementById("ndescription").value;
                var s = ndescription.value.replace("~~", "<br/>");
                //alert(s);
                document.getElementById("p3").value=(s);
        }
    </script>
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
                    <span class="badge badge-pill badge-success">Success</span> Inserted Successfully......
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
            <div class="col-lg-3">
            </div>	
                <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Add News</strong></div>
                            <div class="card-body card-block">
                            	<form method="post" action="addnewsprocess.php" enctype="multipart/form-data">
                                <div class="form-group">
                                	<label for="company" class=" form-control-label"> News Title:</label>
                                	<input type="text" name="ntitle" required placeholder="News Title" class="form-control">
                                	
                                	</div>
                                    <div class="form-group">
                                    	<label for="vat" class=" form-control-label">News Image:</label>
                                    	<input type="file" name="nimage" id="nimage" placeholder="News image" class="form-control">
                                    </div>
                                        <div class="form-group">
                                        	<label for="street" class=" form-control-label">News Description:</label>
                                            <textarea class="form-control" name="ndescription" id='ndescription' placeholder="News Description" rows="7" cols="50" onblur="calculate_avg()"></textarea>
                                            <input type="hidden" name="p3" id='p3'>
                                        	<!--<input type="text" name="ndescription"  placeholder="News description" class="form-control">-->
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