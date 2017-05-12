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
<!--script for reserved-->
<script language="javascript">
function validate()
{
var chks = document.getElementsByName('selector[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
hasChecked = true;
break;
}
}
if (hasChecked == false)
{
alert("Please select at least one.");
return false;
}
return true;
}
</script>
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
			<li ><a href="gallary.php">Gallery</a></li>
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
<a href="#">Site Map</a>
</td>
</tr>
<tr>
<td>
<a href="#">Site Map</a>
</td>
</tr>
<tr>
<td>
<a href="#">Site Map</a>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>



<form name="form1" onSubmit="return validate()" method="post" action="reservation.php">
<td valign="top" style="border:1px solid #3366CC;border-radius:5px " >
<p align="right"><input name="submit" type="submit" value=" Reserved" class="button_example"/></p>
<?php		
 
$result = mysql_query("SELECT * FROM rooms");

echo "<table id='vtable' style='width:680px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>

<tr>
<th bgcolor='#336699'><font color=white size='2'>Room No.</th>
<th bgcolor='#336699'><font color=white size='2'>Category</th>
<th bgcolor='#336699'><font color=white size='2'>Price</th>
<th bgcolor='#336699'><font color=white size='2'>Pre Payment</th>
<th bgcolor='#336699'><font color=white size='2'>Status</th>
<th bgcolor='#336699'><font color=white size='2'>Reserve</th>
</tr>";
echo'</font>';
while($row = mysql_fetch_array($result))
  {
  $ctrl = $row['roomid'];
  print ("<tr>");
  print ("<td><font size='2'>" . $row['roomno'] . "</td>");
 print ("<td><font size='2'>" . $row['category'] . "</td>");
 print ("<td><font size='2'>" . $row['price'] . "</td>");
	 print ("<td><font size='2'>" . "for 1 night<br><font color='red'>Pay only 10% to reserve!</font>" . "</td>");
	  print ("<td><font size='2' color='green'><b>" . $row['status'] . "</b></font></td>");		
echo"<td><input style='margin-top:-2px;' name='selector[]' type='checkbox'></td>";

  print ("</tr>");
  }
print( "</table>");
mysql_close($conn);
?>
						</form>
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
