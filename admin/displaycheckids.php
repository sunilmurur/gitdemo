<html>
<head>
</head>
<body>
	<table  border="1">
		<tr>
			<td>News display ID</td>
			<td>News ID</td>
			<td>Status</td>
			<td>Deleted</td>
			<td>Created date</td>
		</tr>
<?php
include("dbconnect.php");

$query="SELECT * from news_display_tbl";
$result=$link->query($query);
while($row=mysqli_fetch_array($result))
{
	$news_display_id=$row['news_display_id'];
	$news_id=$row['news_id'];
	$status=$row['status'];
	$deleted=$row['deleted'];
	$created_date=$row['created_date'];


?>
	<tr>
		<td><?php echo $news_display_id;?></td>
		<td><?php echo $news_id;?></td>
		<td><?php echo $status;?></td>
		<td><?php echo $deleted;?></td>
		<td><?php echo $created_date;?></td>
	</tr>
	<?php
		}
	?>
</table>
</body>
</html>
