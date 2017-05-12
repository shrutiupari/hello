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
<h2><center>Add Account Form</center></h2>
<br>
<script type='text/javascript'>
function formValidation(){
//assign the fields
        var fname = document.getElementById('fname');
		var mname=document.getElementById('mname');
	var lname= document.getElementById('lname');
	var idno = document.getElementById('idno');
	var phone = document.getElementById('phone');
	var username = document.getElementById('username');
	var password = document.getElementById('password');
if(isAlphabet(fname, "please enter Your First name in letters only")){
if(lengthRestriction(fname, 3, 30,"for your First name")){
if(lengthRestriction(idno, 4, 10,"for your ID NO.")){
if(isAlphabet(mname, "please enter Your middle name in letters only")){
if(lengthRestriction(mname, 3, 30,"for your middle name")){
if(isAlphabet(lname, "please enter Your Last name in letters only")){
if(lengthRestriction(lname, 3, 30,"for your Last name")){
if(isAlphanumeric(password,"Please Enter Correct Password")){
if(lengthRestriction(password, 3, 8,"for your Password")){
if(isAlphanumeric(username,"Please Enter Correct Password")){
if(lengthRestriction(username, 3, 8,"for your username")){
if(isNumeric(phone, "please enter Number only For your Phone no.")){
if(lengthRestriction(phone, 10, 10,"for your Phone number")){
	return true;
	}}}}
	}
	}
	}}
	}}}
	}}
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
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
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>
<form method="post" enctype="multipart/form-data" action="addaccount.php" name="aform" onsubmit='return formValidation()'>
<center> 
<?php
 if(isset($_POST['submitMain']))
 {                            
$sql="INSERT INTO register (fname,mname, lname , sex ,idno,phone,role,username,password)
VALUES
('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[sex]','$_POST[idno]','$_POST[phone]','$_POST[role]','$_POST[username]','$_POST[password]')";

if (!mysql_query($sql,$conn))
  {
  echo'<p class="wrong">Already Exist</p>';
  //die(mysql_error());
  }
  else
  {
  echo"<br><br>";
echo'  <p class="success">Account Is created</p>';
echo'<meta content="3;addaccount.php" http-equiv="refresh"/>';
}}
mysql_close($conn)
?>
<table  style="border:1px solid #000000;border-radius:15px;box-shadow:1px 2px 3px gray;" width="350px" height="400px"font="18" >
<tr>
<th bgcolor="#000000" colspan="2"><font color="white">Account Creation Form</font></th>
</tr>
<tr><td width="1000px"><font face="verdana,arial" size="-1"><font color="red">*</font>First Name:</font></td>
  <td><font face="verdana,arial" size="-1"><input name="fname" type="text" id="fname" required x-moz-errormessage="Please enter Your First Name."></font></td>
 </tr>
 <tr><td width="1000px"><font face="verdana,arial" size="-1"><font color="red">*</font>Middle Name:</font></td>
  <td><font face="verdana,arial" size="-1"><input name="mname" type="text" id="mname" required x-moz-errormessage="Please enter Your Middle Name."></font></td>
 </tr>
 <tr><td width="1000px"><font face="verdana,arial" size="-1"><font color="red">*</font>Last Name:</font></td>
  <td><font face="verdana,arial" size="-1"><input name="lname" type="text" id="lname" required x-moz-errormessage="Please enter Your Last Name."></font></td>
 </tr>
 <tr><td width="1000px"><font face="verdana,arial" size="-1"><font color="red">*</font>Sex:</font></td>
 <td><select name="sex" required x-moz-errormessage="Please select sex.">
							<option value="">...</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select></td></tr>
<tr><td ><font face="verdana,arial" size="-1"><font color="red">*</font>ID No:</font></td>
  <td ><font face="verdana,arial" size="-1"><input name="idno" type="text" id="idno" required x-moz-errormessage="Please enter Your ID NO."></font></td></tr>	
  <tr><td ><font face="verdana,arial" size="-1"><font color="red">*</font>Phone No.:</font></td>
  <td ><font face="verdana,arial" size="-1"><input name="phone" type="text" id="phone" required x-moz-errormessage="Please enter Your Phone NO."></font></td></tr>	
  
  <tr><td ><font face="verdana,arial" size="-1"><font color="red">*</font>Role:</font></td>
  <td><select name="role" required x-moz-errormessage="Please select role.">
							<option value="">...</option>
							<option value="1">Manager</option>
							<option value="2">Receptionist</option>
						</select></td></tr>
						<tr><td ><font face="verdana,arial" size="-1"><font color="red">*</font>User Name:</font></td>
  <td ><font face="verdana,arial" size="-1"><input name="username" type="text" id="username" required x-moz-errormessage="Please enter Your User name."></font></td></tr>	
  <tr><td ><font face="verdana,arial" size="-1"><font color="red">*</font>Password:</font></td>
  <td ><font face="verdana,arial" size="-1"><input name="password" type="password" id="password" required x-moz-errormessage="Please enter Your Password."></font></td></tr>	
<tr><td><font face="verdana,arial" size="-1"></font></td>
  <td ><font face="verdana,arial" size="-1"><input value="Create" style="width:80px;height:30px;background-color:black; color:white;
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
