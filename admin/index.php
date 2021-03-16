<!DOCTYPE html>
<html>
<head>
	
	<?php 
	include("dbconnect.php");
	include("stylesheet.php"); ?>
</head>
<body>
	<?php 
	include("left_panel.php"); 
	include("header.php");
	include("below_header.php");
	?>
	<div class="content mt-3">
	</div>
	<?php
	include("dashboard1.php");
	?>



<?php include("footer.php"); 

include("js_files.php");
?>

</body>
</html>