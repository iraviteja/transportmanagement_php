<center><h1><font color="grey" size="6"><b>ORDER PLACEMENT FORM</b></h1></font></center>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:SlateBlue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: grey; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>
<form action="" method="post">
 
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="fname"/>
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="lname"/>
</td>
</tr>

 


<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="left">
<input name="submit" type="submit" value="submit">
</td>
</tr>
</table>
 
</form>

<?php

include 'connection.php';

	
		
		if(isset($_POST['submit']))
		{
			$fname=$_POST['fname'];
			
			$lname=$_POST['lname'];
			
			$insert=mysql_query("insert into teja(fname,lname)values
				('$fname','$lname')");
				
				
				if($insert==true)
			{
				echo "data inserted";
				header('location:success.php');
			}
			else
				echo "Data Not Inserted";
			
		}
?>
