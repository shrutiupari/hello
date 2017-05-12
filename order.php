<?php
	include("connect.php");
	//Start session
	session_start();
	
	
$pr=$_REQUEST['key'];
$sql="select * from rooms where roomid='$pr'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {	
  $price=$row['price'];
  $id=$row['roomid'];
  $no=$row['roomno'];
  }
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
<!--Date-->
<script type="text/javascript" src="js/datepicker.js"></script>
	<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
        
		<script type="text/javascript">
	
		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				// Clear any old values from the inputs (that might be cached by the browser after a page reload)
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				// Add the onchange event handler to the start date input
				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
				// Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
				// until they become available (a maximum of ten times in case something has gone horribly wrong)

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				// Check the value of the input is a date of the correct format
				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				// If the input's value cannot be parsed as a valid date then return
				if(dt == 0) return;

				// At this stage we have a valid YYYYMMDD date

				// Grab the value set within the endDate input and parse it using the dateFormat method
				// N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				// Set the low range of the second datePicker to be the date parsed from the first
				ed.setRangeLow( dt );
				
				// If theres a value already present within the end date input and it's smaller than the start date
				// then clear the end date value
				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				// Remove the onchange event handler set within the function initialiseInputs
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		//]]>
		</script>
		<!--sa error trapping-->
		<script type="text/javascript">
		function validateForm()
		{
		var x=document.forms["index"]["start"].value;
		if (x==null || x=="")
		  {
		  alert("You must enter your check in Date(click the calendar icon)");
		  return false;
		  }
		var y=document.forms["index"]["end"].value;
		if (y==null || y=="")
		  {
		  alert("You must enter your check out Date(click the calendar icon)");
		  return false;
		  }
		}
		</script>
		<!--sa minus date-->
		<script type="text/javascript">
			// Error checking kept to a minimum for brevity
		 
			function setDifference(frm) {
			var dtElem1 = frm.elements['start'];
			var dtElem2 = frm.elements['end'];
			var resultElem = frm.elements['result'];
			 
		// Return if no such element exists
			if(!dtElem1 || !dtElem2 || !resultElem) {
		return;
			}
			 
			//assuming that the delimiter for dt time picker is a '/'.
			var x = dtElem1.value;
			var y = dtElem2.value;
			var arr1 = x.split('/');
			var arr2 = y.split('/');
			 
		// If any problem with input exists, return with an error msg
		if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
		resultElem.value = "Invalid Input";
		return;
			}
			 
		var dt1 = new Date();
		dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
		var dt2 = new Date();
		dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

		resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
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
	<font color="blue">&nbsp;&nbsp;Your are ready for reserve!</font>
  <form id="form1" method="POST" action="order.php">
  <br><br>
 <table valign='top' align="center" style="width:350px; height:250px;border-radius:10px;border:1px solid #686868">
<tr>
<td></td>
<td align="right"><a href="booking.php"><img src="image/close_icon.gif" title="Close"></a></td></tr>
 <tr><th colspan="2"><font face="arial" size="3">Personal Information</font></th></tr>
 <tr>
<td><font face="times new roman" color="#336699" size="3"><b>First Name:</b></font></td><td><input type='text' name='fname' required></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Last Name:</b></td><td><input type='text' name='lname' required></td>
</tr>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>ID Number:</b></td><td><input type='text' name='idno' required></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Country:</b></td><td><input type='text' name='country' required></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>City:</b></td><td><input type='text' name='city' required></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Phone Number:</b></td><td><input type='text' name='phone' required></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Check In:</b></td><td><input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" placeholder="Start Date" name="start" id="sd" value="" maxlength="10" readonly style="width: 210px; margin-left: 15px; border: 1px double #CCCCCC; padding:5px 10px;"/></td></tr>
<tr><td><font face="times new roman" color="#336699" size="3"><b>Check Out:</b></td><td><input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" placeholder="End Date" name="end" id="ed" value="" maxlength="10" readonly style="width: 210px; margin-left: 23px; border: 1px double #CCCCCC; padding:5px 10px;" /></td></tr>
						          <input type="hidden" name="result" id="result" />
<tr><td colspan="2"><hr></td></tr>




<tr>
<td>&nbsp;</td><td><input type='submit' name='submit' value="Continue" class="button_example" onClick="setDifference(this.form);"></td>
</tr> 
</table>
<input type="hidden" name="pric" value="<?php echo $price?>"/>
<input type="hidden" name="roomid" value="<?php echo $id?>"/>
<input type="hidden" name="room_no" value="<?php echo $no?>"/>
<?php
if(isset($_POST['submit'])){
$p=$_POST['pric'];
$_SESSION['pric']=$p;

$room_no=$_POST['room_no'];
$_SESSION['room_no']=$room_no;


$result=$_POST['result'];
$_SESSION['result']=$result;

$roomid=$_POST['roomid'];
$_SESSION['roomid']=$roomid;

$fname=$_POST['fname'];
$_SESSION['fname']=$fname;

$lname=$_POST['lname'];
$_SESSION['lname']=$lname;

$idno=$_POST['idno'];
$_SESSION['idno']=$idno;

$country=$_POST['country'];
$_SESSION['country']=$country;
$order_date=date("d/m/Y");

$city=$_POST['city'];
$_SESSION['city']=$city;

$phone=$_POST['phone'];
$_SESSION['phone']=$phone;



echo "<script>window.location='payment.php';</script>";

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
