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
			<li class="active"><a href="index.php">Home</a></li>
			<li ><a href="about.php">About Us</a></li>
			<li><a href="rooms.php">Rooms</a></li>
			<li><a href="contacts.php">Contact Us</a></li>
			<li><a href="login.php">Login</a></li>
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
<font color="#336699"><center><h3>Semayawi Hotel</h3></center></font>
<p><table><tr>
<td><img src="image/2011-01-01 03.18.03-1.jpg" width="200px" height="150px"></td>
<td><p style="text-align:justify">Semayawi hotel is found 130 KM far from Addis Abeba in Debre Berhan City. It was started in 2001 E.C.
There is an effort to automate Semayawi room reservation system, so that the reservation system of Semayawi
 Hotel is  automated or computerized that reduces the problem related to the reservation and customers.</p>
</td></tr>
<tr>
<td colspan="2"><p style="text-align:justify">As a result, 
the customer will get comfortable environment. Automation has paramount effect in the customer
 reservation process. The current system of reserving new customers have been done manually, 
 implying that there is time and space consumption.
 The hotel provides the following services for the customer:
 <ul type="circle">
  <li>Meeting Hall</li>
  <li>Restaurant</li>
  <li>Bar</li>
  <li>Bed Room</li>
  </ul>
 
 </p></td>
</tr></table>






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
