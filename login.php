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
<p align="left"><a href="contacts.php"><img width="650px" height="100px" src="image/guest.png"></a>
<div id="Menus">		
		<ul>
			<li ><a href="index.php">Home</a></li>
			<li ><a href="about.php">About Us</a></li>
			<li><a href="rooms.php">Rooms</a></li>
			<li><a href="contacts.php">Contact Us</a></li>
			<li class="active"><a href="login.php">Login</a></li>
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
<th bgcolor="black" style="border-radius:5px"><font color="white">Rooms Reservation</font></th>
</tr>
<tr><td><br></td></tr>
<tr>
<td align="center">
<form action="" method="POST">
<a href="booking.php"><img src="image/booking.png" style="border-radius:10px" width="150px"></a>	  
</form>
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
<a href="site.php">Site Map</a>
</td>
</tr>
<tr>
<td>
<a href="about.php">About Us</a>
</td>
</tr>
<tr>
<td>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>




<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<form action="login.php" method="post" >
<br><br>
<table align="center" style="border-radius:15px;border:1px solid black;width:350px;height:200px">
<tr><td><font color=red> * </font>Role:</td><td><select name='select' id='select'>
<option selected="selected">--select--</option>
<option value="1">Receptionist</option>
<option value="2">Manager</option
<option value="3">Customer</option>
</select> </td></tr>
<tr><td><font color=red> * </font>Username:</td><td><input type="text" name="mail" value="" size="20%" id="txt_username" placeholder="Username"></input></td></tr>
<tr><td><font color=red> * </font> Password:</td><td><input type="password" name="pass" value="" size="20%" id="txt_password" placeholder="Password"></input></td></tr>
<tr><td>&nbsp;</td><td><input type='submit' value='login' style="background-color:black;color:white" name='submitMain' Onclick="return check(this.form);"/></td></tr>
 <tr><td>&nbsp;</td><td><a href="forget.php">Forgot Your Password ? </a></td></tr></table>
	
</form>
<?php
 if(isset($_POST['submitMain']))
 {
  $acc=$_POST['select'];
  $user =$_POST['mail'];
  $_SESSION['mail']=$_POST['mail'];
  $password=$_POST['pass'];
  $_SESSION['pass']=$_POST['pass'];
  $query = "SELECT * FROM user WHERE 	username= '{$user}' AND password= '{$password}' AND role='{$acc}';";
   $result_set=mysql_query($query);
if(!$result_set){
die("query is failed".mysql_error());
}
if(mysql_num_rows($result_set)>0)
{

 if($acc=='2')
{
$_SESSION['user_id']=$row['user_id'];
echo "<script>window.location='receptionist.php';</script>";
}
else if($acc=='1')
{
$_SESSION['user_id']=$row['user_id'];
echo "<script>window.location='manager.php';</script>";
}
else if($acc=='3')
{
$_SESSION['user_id']=$row['user_id'];
echo "<script>window.location='customer.php';</script>";
}
}
else
   {
  echo '<div align="center"><br><strong><font color="#FF0000">Role, User Name & Password Not Match !!</font></Strong></div>'; 
           echo'  <meta content="5;login.php" http-equiv="refresh" />';

   }
mysql_close($conn);
}
?>







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
