<?php
	include("connect.php");
	//Start session
	session_start();
	//Unset the variables stored in session
	session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p align="left"><a href="contacts.php"><img width="550px" height="100px" src="image/manager.png"></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="manager.php">Home</a></li>
			<li><a href="mcomments.php">Comments</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="200px" src="image/banner1.png">
</td>
</tr>
<tr>
<td valign="top" width="200px">
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Manage User Account</font></th>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="addaccount.php">Add User Account</a>
</td>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="updateaccount.php">Update User Account</a>
</td>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="deleteaccount.php">Delete User Account</a>
</td>
</tr>
<tr><td><br></td></tr>
<tr>
<td align="center">




</td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="#000000" style="border-radius:5px"><font color="white">Related Links</font></th>
</tr>
<tr><td></td></tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="mreport.php">Generate Report</a>
</td>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="mreservation.php">View Reservations</a>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>




<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">

<br><br>
<center><h2>Update User Account Page</h2></center>

<?php
$ctrl = $_REQUEST['idno'];
$query="SELECT * FROM register where idno='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("user not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row['fname'];
$r1=$row['mname'];
$r2=$row['lname'];
$r3=$row['sex'];
$r4=$row['idno'];
$r5=$row['phone'];
$r6=$row['role'];
$r7=$row['username'];
$r8=$row['password'];
}
?>
  <form id="form1" method="POST" action="editaccount.php"  onsubmit='return formValidation()'>
 
 <table valign='top' align="center">
<tr>
<tr><td>First Name:</td><td><input type='text' name='fname' value="<?php echo "$r0"?>"></td></tr>
<tr><td>Middle Name:</td><td><input type='text' name='mname' value="<?php echo "$r1"?>"></td></tr>
<tr><td>Last Name:</td><td><input type='text' name='lname' value="<?php echo "$r2"?>"></td></tr>
<tr><td>Sex:</td><td><input  type='text' name='sex'  value="<?php echo "$r3"?>"></td></tr>
<tr><td>User ID:</td><td ><input  type='text' name='idno'  value="<?php echo "$r4"?>"></td></tr>
<tr><td>Phone No:</td><td><input type='text' name='phone' value="<?php echo "$r5"?>"></tr></td>
<tr><td>Role  :</td><td><input type='text' name='role' value="<?php echo "$r6"?>"></tr></td>
<tr><td>Username:</td><td><input type='text' name='username' value="<?php echo "$r7"?>"></tr></td>
<tr><td>Password:</td><td><input type='text' name='password' value="<?php echo "$r8"?>"></tr></td>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Ok'></tr></td>
</table>
 <?php
}
?>
 <?php
  if(isset($_POST['update']))
  {
	            $fname=$_POST['fname'];
				$mname=$_POST['mname'];
				$lname=$_POST['lname'];
				$idno=$_POST['idno'];
				$phone=$_POST['phone'];
				$sex=$_POST['sex'];
				$role=$_POST['role'];
				$password=$_POST['password'];
				$username=$_POST['username'];
  $update = mysql_query("update register set fname='$fname',mname='$mname', lname='$lname',sex='$sex',role='$role', phone='$phone' 
	,password='$password',username='$username'
  WHERE idno='{$idno}'") or die(mysql_error());
 // echo'<meta content="3;raccount.php" http-equiv="refresh"/>';
 echo "<script>window.location='updateaccount.php';</script>";
  }
  ?>
 
  </form>  
  </div>  





</td>
</tr>
<tr>
<td align="center" height="30px" style="border:1px solid #3366CC; background-color:black" colspan="2">
<font color="white" face="arial" size="2px">Semayawi &copy;&nbsp;2014&nbsp;Copy Right Reserved</font></td>
</tr>
</table>
</center>
</body>
</html>
