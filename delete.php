<?php
include("connection.php");
	$id=$_REQUEST['id'];
	mysql_query("DELETE FROM staff WHERE uname='$id'") or(mysql_error("record not deleted"));
	header("location:admin.php");
?>
