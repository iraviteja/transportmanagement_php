<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>TCC | Client</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />

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


<?php

include 'connection.php';
		
		$errors = array();
		if(isset($_POST['submit']))
		{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$pwd=$_POST['pwd'];
			$cpwd=$_POST['cpwd'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$city=$_POST['city'];
				  $query = mysql_query("select * from reg where fname = '$fname' and lname = '$lname' ")or die(mysql_error());
	  $count = mysql_num_rows($query);
	  if ($count > 0) { ?>
	  <script>
alert('Entered First Name and Last Name Already Exists.');
 </script>
	  <?php }
	  else
	  {
			
			
			if(preg_match("/\S+/", $fname)  === 0 || !preg_match("/^[a-zA-Z0-9]*$/",$fname))
      {
         $errors["fname"] = "Please Enter First Name";
      }
	  elseif(preg_match("/\S+/" , $lname) ===0 || !preg_match("/^[a-zA-Z0-9]*$/",$lname))
      {
        $errors["lname"] = "Please Enter Last Name";
      }
	   elseif(preg_match("/.+@.+\..+/", $email )===0)
      {
        $errors["email"] = "* Please Enter a Valid Email Address ";
      }
	  elseif(preg_match("/\S+/", $pwd)===0 || strlen($pwd) <= 7)
      {
        $errors["pwd"] = "* Password must be atleast 8 characters";
      }
      
      elseif($cpwd !== $pwd )
      {
        $errors["cpwd"] = "* Password must match";
      }
	 
      elseif(preg_match("/\S+/", $phone)===0 || strlen($phone) <= 10)
      {
        $errors["phone"] = "* Phone number must be 12 digit";
      }
	   elseif(preg_match("/\S+/" , $city) ===0 || !preg_match("/^[a-zA-Z0-9]*$/",$city))
      {
        $errors["city"] = "* City Required";
      }

      else
      {
      $insert=mysql_query("insert into reg(fname,lname,pwd,cpwd,email,phone,city)values
				('$fname','$lname','$pwd','$cpwd','$email','$phone','$city')");
				
				
				if($insert==true)
			{
				echo "<script>alert('You Have Been Registered. ')</script>";
				echo "<script>window.open('order.php','_self')</script>";
			}
			else
				echo "Data Not Inserted";

	  }
	 
	}
		}
	
?>


<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
     <div id="topnav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="manager.php">Manager</a></li>
	 <li><a href="staff.php">Staff</a></li>
	 <li><a href="order.php">Client</a></li>
        <li class="active"><a href="#">Login Portal</a><br>
          <ul>
            <li><a href="adminlog.php">Admin login</a></li>
            <li><a href="managerlog.php">Manager login</a></li>
            <li><a href="stafflog.php">Staff Login</a></li>
	    <li><a href="client.php">Client Login</a></li>
	    <li><a href="client1.php">Client Registration</a></li>
          </ul>
        </li>
      </ul>
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
	<div class="main">
		<form action="" method="post">
    		<h1><font color="#059BD8"><b><H2>Client Registration Form</H2></b></h1></font>
  			<div class="inset">
			<p><label><font color="#059BD8" size="4"><b>NAME</b></font></label></p>
				<div class="row">
					<p class="col-md-6"><input name="fname"  type="text" placeholder="FirstName" /></p>
					
					<p class="col-md-6"><input name="lname"  type="text" placeholder="LastName"/></p>
					
				</div>
				<?php
		    if(isset($errors["fname"]))
		    {
		      echo htmlentities($errors["fname"]);
		    }
		  ?>
		  <?php
		    if(isset($errors["lname"]))
		    {
		      echo $errors["lname"];
		    }
		  ?>
		  <br>
				<p>
	    		 <br><p><label><font color="#059BD8" size="4"><b>EMAIL</b></font></label></p>
   	 			<input name="email"  type="text" placeholder="Email"/>
   	 			<?php
		  if(isset($errors["email"]))
		  {
		    echo $errors["email"];
		  }
		 ?>
				</p>
  				<p>
				    <br><p><label><font color="#059BD8" size="4"><b>PASSWORD</b></font></label></p>
				    <input name="pwd"  type="password" placeholder="Password"/>
				     <?php
		    if(isset($errors["pwd"]))
		    {
		       echo $errors["pwd"];
		    }
		  ?>
  				</p>
				<p>
				    <br><p><label><font color="#059BD8" size="4"><b>CONFIRM PASSWORD</b></font></label></p>
				    <input name="cpwd"  type="password" placeholder="ConfirmPassword"/>
				    <?php
		    if(isset($errors["cpwd"]))
		    {
		       echo $errors["cpwd"];
		    }
		  ?>
  				</p>
				
				
				<p>
				    <br><p><label><font color="#059BD8" size="4"><b>CONTACT NO</b></font></label></p>
				    <input name="phone"  type="text" placeholder="PhoneNumber"/>
				    <?php
		  if(isset($errors["phone"]))
		  {
		    echo $errors["phone"];
		  }
		 ?>
  				</p>
  				<p>
				    <br><p><label><font color="#059BD8" size="4"><b>CITY</b></font></label></p>
				    <input name="city"  type="text" placeholder="City"/>
				    <?php
		  if(isset($errors["city"]))
		  {
		    echo $errors["city"];
		  }
		 ?>
  				</p>
				
				  
 			 </div>
			 
 	 
			  <p class="p-container">
			  <input type="submit" name="submit" value="Register">
			    
				
			  </p>
		</form>
	</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<BR><BR><BR><div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Transport Company Computerization </a></p>
    
    <br class="clear" />
  </div>
</div>
</body>
</html>
