<!DOCTYPE html>
<html>
<head>
	<?php 
	include("dbconnect.php");
	include("stylesheet.php");
	?>
</head>

<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" >
                        <font color="white"><h4>Temple News</h4></font>
                </div>
                <div class="login-form">

<?php
if(isset($_GET['val']))
{
?>
	<div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success"></span>  Invalid login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
<?php	
}
?>
                    <form method="post" action="loginprocess.php">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="uname" class="form-control" required placeholder="User name"/>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="upass" class="form-control" required placeholder="Password"/>
                        </div>
                                
                         <div class="form-group">
                            <input type="submit" name="submit" value="submit" class="btn btn-primary"/>	
                        </div>      
                                
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include("js_files.php");
?>
</body>
</html>