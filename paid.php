<?php
	include("connection.php");
	$id=$_REQUEST['id'];
	mysql_query("UPDATE  stock SET payment='Paid' WHERE ProductName='$id'") or(mysql_error("Not Received"));
	header("location:staff.php");
?>