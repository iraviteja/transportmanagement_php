<?php
	include("connection.php");
	$id=$_REQUEST['id'];
	$query=mysql_query("UPDATE  stock SET Status='Approved' WHERE ProductName='$id' and payment='Paid'") or(mysql_error("record not deleted"));
	echo $result;
	if($query==true)
		
	{
		//echo "<script>alert('Approved')</script>";
		header("location:approve.php");
	}
	else
		echo "Not Received";
	
	
?>