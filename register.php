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
<script language="javascript">
  function check()
  {
   
 if(document.getElementById("fname").value =="")
   {
    alert('Please Enter your Name !!'); 
    document.getElementById("txt_fname").focus();
    return false;
   }
  if(document.getElementById("lname").value =='')
   {
     alert('Please enter your last name !!'); 
    document.getElementById("lname").focus();
    return false;
   }
   if(document.getElementById("user_id").value =='')
   {
     alert('Please enter your Id Number !!'); 
    document.getElementById("user_id").focus();
    return false;
   }
   if(document.getElementById("txt_ge").value =='sex')
   {
    alert('Please Select your gender !!'); 
    document.getElementById("txt_ge").focus();
    return false;
   }
  if(document.getElementById("mail").value =="")
   {
    alert('Please Enter your Email !!'); 
    document.getElementById("mail").focus();
    return false;
   }
 if(document.getElementById("pass").value =="")
   {
     alert('Please Enter The password !!'); 
    document.getElementById("pass").focus();
    return false;
   }
   
   
   
     if(document.getElementById("rpass").value =="")
   {
     alert('Please Enter The confirm password !!'); 
    document.getElementById("rpass").focus();
    return false;
   }
     
    if(document.getElementById("hn").value =="")
   {
     alert('Please Entere The House Number !!'); 
    document.getElementById("hn").focus();
    return false;
   }
  if (document.getElementById("mo").value =="")
   {
     alert('Please Enter yuor phone number !!'); 
    document.getElementById("mo").focus();
    return false;
   }
   if (document.getElementById("").value =="")
   {
     alert('Please Enter yuor phone number !!'); 
    document.getElementById("mo").focus();
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
<p align="left"><a href="contacts.php"><img width="650px" height="100px" src="image/guest.png"></a>
<div id="Menus">		
		<ul>
			<li ><a href="index.php">Home</a></li>
			<li class="active"><a href="register.php">Register</a></li>
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
<a href="gallery.php">Photo Gallery</a>
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
<a href="about.php">Site Map</a>
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




<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<script type='text/javascript'>
function formValidation(){

     
		var fname=document.getElementById('fname');
		var lname=document.getElementById('lname');
	var mail = document.getElementById('mail');
		var pass = document.getElementById('pass');
	var hn = document.getElementById('hn');
	var mo = document.getElementById('mo');
	
	if(isAlphabet(fname, "please enter Your name in characters only number is not allowed")){
	if(lengthRestriction(fname, 3, 10,"for your Name")){
	if(isAlphabet(lname, "please enter Your Last name in characters only number is not allowed")){
	if(lengthRestriction(lname, 3, 10,"for your Last Name")){
		if(lengthRestriction(pass, 6, 24,"Use for your password protection")){
	if(emailValidator(mail,"check your e-mail format Example jone@gmail.com/yahoo.com")){
	if(isNumeric(hn, "please enter only Number for Hose Number")){
	if(isNumeric(mo, "please enter only Number For Mobile phone")){
	

	return true;
	}
	
}
}
	}
	}
	}
	}
	}
	
return false;
		
}
function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
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
		alert("Please enter between " +min+ " and " +max+ " characters and special symboles" +helperMsg);
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
<fieldset style=" border-color:#333333; height:700px;">

<form  method='POST' action='register.php' onsubmit='return formValidation()'>
<?php
if(isset($_POST['submitMain'])){

$fname=$_POST['fname'];
$date=$_POST['lname'];
$gender=$_POST['gender'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
$mobile=$_POST['mobile'];
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","hotel");
$connect=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connect){
die("error connection to db server".mysql_error());
}
$db_select=mysql_select_db(DB_NAME,$connect);
if(!$db_select){
die("error in selection db".mysql_error());
}
if($pass==$rpass){
$query="INSERT INTO register(fname ,lname,gender,email,password,re_typepassword,Mobile,role,status)";
$query.="VALUES ('{$fname}','{$date}','{$gender}','{$mail}','{$pass}','{$rpass}','{$mobile}','4','1');";

$result=mysql_query($query);
if(!$result){
  echo "<img src='image/wrong.png' width='25px' height='25px'/><font color='red'>This Email already Existed</font>"; 
}
else{
echo "<img src='image/tick.png' width='25px' height='25px'><font color='green'>Your Account is created succes fully</font></img>"; }
}
else{
echo"<img src='image/wrong.png' width='25px' height='25px'><font color='red'>password not match</font></p>";

}
mysql_close($connect);
}
?>
<table border="0" width="500px" id="si">
<br/>

<tr><td font style='font-family:Times New Roman;font-size:24px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; '><font size="5">
First Name :</font></td>
<td><input type="text" name="fname" id="fname" placeholder='First Name'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:24px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; '>Last Name :
	</td>
	<td><input type="text" name="lname"  id="lname"placeholder=' Last Name'></input></td></tr>
	<tr><td font style='font-family:Times New Roman;font-size:24px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; '>User ID :
	</td>
	<td><input type="text" name="user_id"  id="user_id" placeholder='user id'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:24px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; '>Sex :</td>
<td><select name='gender'  id="txt_ge" placeholder='Sex'>
<option selected="selected">sex</option>
<option>Male</option>
<option>Fmale</option>
</select></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:24px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; '>E-mail :</td>
<td><input type="text" name="mail" value="" size='20%' id="mail"placeholder='Enter Your Email'/></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:24px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; '>Password :</td>
<td><input type="password" name="pass" value="" size='20%' id="pass" placeholder='Enter your password'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:24px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; '>Confirm Password :</td>
<td><input type="password" name="rpass" value="" size='20%' id="rpass" placeholder='ReEnter password'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:24px;line-height:18px;left-align:justify;padding-left:20px; margin-top:0px; '>
Mobile No :</font></td><td><input type="text" name="mobile" value="" size='20%' id="mo" placeholder='Mobile Phone'></input></td></tr>
<tr><td colspan="4" align="center">
<input type='submit' value='Submit' name='submitMain' Onclick="return check(this.form);" />
<input type='reset' value='clear'/></td></tr></table>

</form>

</fieldset>






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
