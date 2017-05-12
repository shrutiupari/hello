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
<p align="left"><a href="contacts.php"><img width="550px" height="100px" src="image/reception.png"></a>
<div id="Menus">		
		<ul>
			<li ><a href="receptionist.php">Home</a></li>
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
<!--Form validator-->
<script type='text/javascript'>
function formValidation(){
//assign the fields
        var roomno=document.getElementById('roomno');
		var price=document.getElementById('price');
if(isAlphanumeric(roomno, "Must be number or alphnumeric")){
if(lengthRestriction(roomno, 2, 5,"for your room no")){
if(isAlphanumeric(price, "Must be number or alphnumeric")){
if(lengthRestriction(price, 2, 6,"for your room no")){
	return true;
	}}
	}}
return false;		
} 	
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z/]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>
<form method="post" enctype="multipart/form-data" action="addroom.php" name="aform" onsubmit='return formValidation()'>
<center> 
<?php
 if(isset($_POST['submitMain']))
 {
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_db", $conn);

$sql="INSERT INTO rooms (roomno,category, price , status ,photo)
VALUES
('$_POST[roomno]','$_POST[category]','$_POST[price]','$_POST[status]','$location')";

if (!mysql_query($sql,$conn))
  {
  echo'<p class="wrong">Already Exist</p>';
  die(mysql_error());
  }
  echo"<br><br>";
echo'  <p class="success">Added Successfully!</p>';
echo'<meta content="3;addroom.php" http-equiv="refresh"/>';
}
mysql_close($conn)
?>
<table  style="border:1px solid #000000;border-radius:15px;box-shadow:1px 2px 3px gray;" width="350px" height="400px"font="18" >
<tr>
<th bgcolor="#000000" colspan="2"><font color="white">Room registration Form</font></th>
</tr>
<tr><td width="1000px"><font face="verdana,arial" size="-1"><font color="red">*</font>Room No:</font></td>
  <td><font face="verdana,arial" size="-1">
  <input name="roomno" type="text" id="roomno" required x-moz-errormessage="Please enter Room No."></font></td>
 </tr>
 <tr><td width="1000px"><font face="verdana,arial" size="-1"><font color="red">*</font>Category:</font></td>
 <td><select name="category" required x-moz-errormessage="Please select category.">
							<option value="">...</option>
							<option value="single">Single</option>
							<option value="double">Double</option>
						</select></td></tr>
<tr><td ><font face="verdana,arial" size="-1"><font color="red">*</font>Price:</font></td>
  <td ><font face="verdana,arial" size="-1"><input name="price" type="text" id="price" required x-moz-errormessage="Please enter Price."></font></td></tr>	
	</tr>
  
  <tr><td ><font face="verdana,arial" size="-1"><font color="red">*</font>Status:</font></td>
  <td><select name="status" required x-moz-errormessage="Please select status.">
							<option value="">...</option>
							<option value="available">Available</option>
							<option value="reserved">Reserved</option>
						</select></td></tr>
  <tr><td><font face="verdana,arial" size="-1"><font color="red">*</font>Photo:</td>
              <td><input type="file" name="image" required x-moz-errormessage="Please select the path." /></td></tr>
<tr><td><font face="verdana,arial" size="-1"></font></td>
  <td ><font face="verdana,arial" size="-1"><input value="Save" style="width:80px;height:30px;background-color:black; color:white;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px";  type="submit" name='submitMain' Onclick="return check(this.form);"></font></td></tr>
<tr><td>&nbsp;</td></tr>
					   </table></center>
</form>
<br><br>
















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
