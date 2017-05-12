<?php
	include("connect.php");
	//Start session
	session_start();
	//Unset the variables stored in session

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
			<li class="active"><a href="receptionist.php">Home</a></li>
			<li><a href="comments.php">Comments</a></li>
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
	<?php
$ctrl = $_REQUEST['roomid'];
$query="SELECT * FROM rooms where roomid='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Room is not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row['roomno'];
$r1=$row['category'];
$r2=$row['price'];
$r3=$row['status'];
$r4=$row['photo'];
}
?>
  <form id="form1" method="POST" action="editrooms.php"  onsubmit='return formValidation()'> 
 <table valign='top' align="center" style="border:1px solid #000;border-radius:15px;box-shadow:1px 10px 10px gray">
<tr>
<tr><td>Room No:</td><td><input type='text' name='roomno' value="<?php echo "$r0"?>"></td></tr>
<tr><td>Category:</td><td><input type='text' name='category' value="<?php echo "$r1"?>"></td></tr>
<tr><td>Price:</td><td><input type='text' name='price' value="<?php echo "$r2"?>"></td></tr>
<tr><td>Status:</td><td ><input  type='text' name='status'  value="<?php echo "$r3"?>"></td></tr>
<tr><td>Image :</td><td><img src="<?php echo "$r4"?>" width="150px" height="150px"></td></tr>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Save Changes'></tr></td>
</table>
 <?php
}
?>
 <?php
  if(isset($_POST['update']))
  {
	            $roomno=$_POST['roomno'];
				$category=$_POST['category'];
				$price=$_POST['price'];
				$status=$_POST['status'];
  $update = mysql_query("update rooms set roomno='$roomno',category='$category', price='$price',status='$status'
  WHERE roomid='{$ctrl}'") or die(mysql_error());
  echo'<meta content="3;updateroom.php" http-equiv="refresh"/>';
 //echo "<script>window.location='updateroom.php';</script>";
  }
  
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
