
<?php  
    session_start();//session is a way to store information (in variables) to be used across multiple pages.  
    session_destroy();  
	echo "<script>alert('You Have Been Logged Out. ')</script>";
	echo "<script>window.open('index.html','_self')</script>";
?>  
