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




<td valign="top" style="border:1px solid #3366CC;border-radius:5px " height="500px">
	<!--Body section-->	
	<br>
	<center><font color="blue">&nbsp;&nbsp;List of Rooms for reservation</font></center>
	<?php		
			$av=mysql_query("select *from rooms where status='available'");
			$countav=mysql_num_rows($av);
			$re=mysql_query("select *from rooms where status='reserved'");
			$countre=mysql_num_rows($re);			
			echo '<font size="2"><h2><u>Information:</u></h2> There are <font color="green" >'.$countav. ' Available Rooms </font>' ;
			echo"<br><br>";
   ?>
	<?php
$result = mysql_query("SELECT * FROM rooms where status ='available'");
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['roomid'];
$photo=$row['photo'];
$roomno=$row['roomno'];
$category=$row['category'];
$price=$row['price'];
?>
<table>
<tr>
<td><img src="<?php echo $photo;?>" width="100px" height="100px"></td><td>
<table style="border-radius:5px;border:1px solid black;width:120px;height:100px;box-shadow:1px 1px 10px black">
<tr><td><?php echo "<b>Room No:</b>"."&nbsp;".$roomno;?><br><?php echo "<b>Category:</b>"."&nbsp;".$category;?><br>
<?php echo "<b>Price:</b>"."&nbsp;".$price;?></td></tr><tr><td style='height:30px;'><a href = "order.php?key=<?php echo $ctrl;?>"><img src = 'image/book.png' width='75px' height='25px' title='Edit' ></img></a></td></tr></table></td>
</tr>
</table>
<?php 
}
?>
<!--End of body Section-->
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
