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
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='deleteroom.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p align="left"><a href="contacts.php"><img width="550px" height="100px" src="image/reception.png"></a>
<div id="Menus">		
		<ul>
			<li><a href="receptionist.php">Home</a></li>
			<li class="active"><a href="comments.php">Comments</a></li>
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
<th bgcolor="black" style="border-radius:5px"><font color="white">Manage Room</font></th>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="addroom.php">Add Room</a>
</td>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="updateroom.php">Update Room</a>
</td>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="deleteroom.php">Delete Room</a>
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
<img src="image/Picture1.png" width="20px"><a href="sites.php">Site Map</a>
</td>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="rreport.php">Generate Report</a>
</td>
</tr>
<tr>
<td>
<img src="image/Picture1.png" width="20px"><a href="reservation.php">View Reservations</a>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<br><br>
<table align='center' border="1" style="border-radius:15px" width="400px">
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'>Room No</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'>Category</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'>Price</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'>Status</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'>Delete</th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM rooms");
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['roomid'];
$roomno=$row['roomno'];
$category=$row['category'];
$price=$row['price'];
$status=$row['status'];
?>
<tr>
<td><?php echo $roomno;?></td>
<td><?php echo $category;?></td>
<td><?php echo $price;?></td>
<td><?php echo $status;?></td>	
						<?php
						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'deleterooms.php?key=".$ctrl."'><img width='35px' height='25px' src = 'image/wrong.png' title='Delete' onclick='isdelete();'></img></a></td>
		");?>

		</tr>
<?php
  }
print( "</table>");
mysql_close($conn);
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
