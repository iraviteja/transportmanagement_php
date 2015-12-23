<?php  
session_start();  
  
if(!$_SESSION['aname'])  
{  
  
    header("Location: adminlog.php");
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
		<li><a href="staffaccounts.php">Accounts</a></li>
        <li  class="active"><a href="admin.php">Manage Ac/s</a></li>
        <li ><a href="afeedback.php">Feedback</a></li>
        <li ><a href="astats.php">Stats</a></li>
	 	 
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
<div class="content">
 
<center><h1><font color="grey" size="6"><b><a class="btn" href="#">MANAGE STAFF ACCOUNTS</a></b></h1></font></center><BR>
<td width="606" height="288" colspan="2" valign="top" bgcolor="#393939">
		 <table width="100%" border="2">
        <tr> 
          <td><div align="center"><font color="#059BD8" size="3"><b>User Name</font></div></td>
          <td><div align="center"><font color="#059BD8" size="3"><B>Email</B></font></div></td>
          <td><div align="center"><font color="#059BD8" size="3"><B>Password</B></font></div></td>
          <td><div align="center"><font color="#059BD8" size="3"><B>Address</B></font></div></td>
          <td><div align="center"><font color="#059BD8" size="3"><B>Modify</B></font></div></td>
	  <td><div align="center"><font color="#059BD8" size="3"><B>Remove</B></font></div></td>
        </tr>
		<?php 
	  include 'connection.php';
	   $Client=$_SESSION['aname'];
	   $rs=mysql_query("select * from staff");
	   while($newArray = mysql_fetch_array($rs))
		{
							$id = $newArray['uname'];
							$name=$newArray['uname'];
							$email=$newArray['email'];
							$pwd=$newArray['pwd'];
							$address=$newArray['address'];
						
		?>
		 <tr> 
          <td width="25%"><center><font color="black" size="3" > 
            <?php echo $name;?>
            </font></center></td>
          <td width="21%"> <center><font color="black" size="3" > 
            <?php echo $email;?>
            </font></center></td>
          <td width="15%"> <center><font color="black" size="3" > 
            <?php echo $pwd;?>
            </font><center></td>
          <td width="18%"> <center><font color="black" size="3" > 
            <?php echo $address;?>
            </font></center></td>
	<td width="18%"> <center><font color="red" size="4" > 
            <?php echo "<a href ='edit.php?id=$id'>Edit</a>";?>
            </font></center></td>
	<td width="18%"> <center><font color="black" size="4" > 
            <?php echo "<a href ='delete.php?id=$id'>Delete</a>";?>
            </font></center></td>
        </tr>
        <?php
							}
	   ?>
		</table>

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

echo "<font color='grey' size='6'><b>Welcome </b></h1></font><font color='green' size='6'>".$_SESSION['aname']."</h1></font></html>";
?>
  <br><br>
      <div id="featured">
        <ul>
          <li>
            <h2>TRANSPORT COMPANY COMPUTERIZATION</h2>
            <p class="imgholder"><img src="images/demo/240.jpg" alt="" /></p>
            <p>TRANSPORT COMPANY COMPUTERIZATION (TCC) is leading transport company in the field of trasnportation. It offeres wide range of services to customers to deliver their goods with very reasonable prices and safety.</p>

          </li>
        </ul>
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
