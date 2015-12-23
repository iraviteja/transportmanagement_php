<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: client.php");
}  
  
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>TCC | ClientHome</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<style>
.btn {
  background: #059BD8;
  background-image: -webkit-linear-gradient(top, #059BD8db, #059BD8);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
</head>

<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="header">
     <div class="fl_left">
	
	<p><img src="images/491.gif" alt="Smiley face" align="middle"></p>
      <h1><a href="#"><strong>&nbsp; &nbsp; &nbsp; &nbsp; Transport Company Computerization  </strong></a></h1>
      
	  <p><img src="images/491.gif" alt="Smiley face" align="middle"></p><br>
    </div></center>
    
	</div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
     <div id="topnav">
      <ul>
         <li><a href="index.html">Home</a></li>
        <li class="active"><a href="order.php">Order Placement</a></li>
        <li><a href="status.php">Order Status</a></li>
	 
	 <li ><a href="feedback.php">Feedback</a></li>
        <li><a href="logout.php">Logout</a><br>
          </ul>
        </li>
      </ul>
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper">
	
  <div class="container">
	<center><h1><font color="grey" size="6"><b><a class="btn" href="#">Available Trucks</a></b></h1></font></center><BR>  
<marquee
 behavior="alternate" direction="left"><img 
src="images/demo/truck.png" width="900" height="350" alt="Natural" 
/></marquee>

<br><br><br>
<div class="content">
 
<center><h1><font color="grey" size="6"><b><a class="btn" href="#">PLACE YOUR ORDER</a></b></h1></font></center><BR>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:SlateBlue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:black; font-size: 11pt; font-style: normal;
text-align:; background-color: #F5F5F5; border-collapse: collapse; border: 0px solid navy}
table.inner{border: 0px}
</style>
<form action="" method="POST">
 
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td><br><font color="#059BD8" size="3"><b>Customer Name </b></font></td>
<td><input type="text" name="FName"/ required>
</td>
</tr>
 
<!----- eMAIL ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Customer Email </b></font></td>
<td><input type="text" name="Email"/required>
</td>
</tr>


 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Contact Number </b></font></td>
<td>
<input type="text" name="MNumber"/required>
</td>
</tr>
 <!-----Product Name ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Product Name </b></font></td>
<td>
<input type="text" name="PName"/required>
</td>
</tr>
<!----- Product Weight ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Product Weight </b></font></td>
<td>
<input type="text" name="PWeight"/required>
</td>
</tr>
 
<tr>
<td><font color="#059BD8" size="3"><b>Truck ID </b></font></td>
<td>
<input type="text" name="Tid"/required>
</td>
</tr>
  
<!----- Delivery  ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Departure City </b></font></td>
<td><input type="text" name="DCity"/required>
</td>
</tr>
<!----- Arrival  ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Arrival City </b></font></td>
<td><input type="text" name="ACity"/required>
</td>
</tr>
<!----- State ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Arrival State </b></font></td>
<td><input type="text" name="State"/required>
</td>
</tr>
  
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Pin Code </b></font></td>
<td><input type="text" name="PinCode"/required>
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td><font color="#059BD8" size="3"><b>Country </b></font></td>
<td><input type="text" name="Country" value="India" readonly="readonly" /required></td>
</tr>
 

<!----- Address ---------------------------------------------------------->
<tr>
<td><br><br><font color="#059BD8" size="3"><b>Delivery Address </b></font></td>
<td><br><textarea name="Address" rows="4" cols="61" style="color:black"required></textarea></td>
</tr>


<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="left">
<input name="submit" type="submit" value="Place Order">
</td>
</tr>
</table>
 
</form>
<div id="comments">
        
     <div id="comments">
        <br><br><h2>Comments</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">Karthik Wrote</a></span> <span class="wrote"></span></div>
            <div class="submitdate"><a href="#">March 4, 2015 at 8:35 am</a></div>
            <p>It is wonderful experience with Transport Company for delivering my goods very safely with affordable price.</p>
          </li>
          <li class="comment_even">
            <div class="author"><img class="avatar" src="images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">Sashank </a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">March 11, 2015 at 11:11 pm</a></div>
            <p>I got my delivery in a very light speed soon i placed the order. Thanks to TCC.......... </p>
          </li>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">Priyanka </a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">April 1, 2015 at 9:15 am</a></div>
            <p>Nice Hospitality with TCC staff . I transported my goods with in time to far distance. Thanks to TCC</p>
          </li>
        </ul>
      </div>
      
	  
      
  
      
      </div>
    </div>
<div class="column">
		  <?php 

echo "<font color='grey' size='6'><b>Welcome </b></h1></font><font color='green' size='6'>".$_SESSION['email']."</h1></font></html>";
?>
      <div id="featured">
        <ul>
          <li>
            <h2>TRANSPORT COMPANY COMPUTERIZATION</h2>
            <p class="imgholder"><img src="images/demo/240.jpg" alt="" /></p>
            <p>Transport Company Computerization is well known for Transporting heavy goods.TCC provides transporting goods with affordable prices to clients.</p>

          </li>
        </ul>
      </div>
      <div class="holder">
 
      </div>
    </div>
    <br class="clear" />
  </div>
</div>

<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
  <center> <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">TRANSPORT COMPUTERIZATION COMPANY</a></p></center>
    <br class="clear" />
  </div>
</div>
</body>
</html>
<?php

include 'connection.php';

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	
		
		if(isset($_POST['submit']))
		{
			$Name=$_POST['FName'];
			$email=$_SESSION['email'];
			$mob=$_POST['MNumber'];
			$pname=$_POST['PName'];
			$pweight=$_POST['PWeight'];
			$tid=$_POST['Tid'];
			$del=$_POST['DCity'];
			$arr=$_POST['ACity'];
			$state=$_POST['State'];
			$pin=$_POST['PinCode'];
			$add=$_POST['Address'];
			
			$insert=mysql_query("insert into stock(FirstName,EmailId,MobileNumber,ProductName,ProductWeight,TruckId,Departure,Arrival,State,PinCode,Address)values
				('$Name','$email','$mob','$pname','$pweight','$tid','$del','$arr','$state','$pin','$add')");
				
				
				if($insert==true)
			{
				echo "<script>alert('Order Placed Successfully')</script>";
				echo "<script>window.open('success.php','_self')</script>";
				
			}
			else
				echo "Data Not Inserted";
			
		}
?>
