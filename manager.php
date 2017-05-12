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
Manager Page...










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
