<html>
<head>
</head>
<body>
<?php
include("dbconnect.php");
$query="DELETE FROM news_display_tbl";
$result=$link->query($query);
if(!empty($_POST['checkbox'])) {
    foreach($_POST['checkbox'] as $check) {
            echo "$check<br>";

$query="INSERT INTO news_display_tbl (news_id) VALUES($check)";
$result=$link->query($query);
header("location:viewnews.php?success=1");

}

}
else
{
	header("location:viewnews.php?err");
}
?>

