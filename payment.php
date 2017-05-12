<?php
	include("connectbank.php");
	
	//Start session
	session_start();
	
	
$result=$_SESSION['result'];
$p=$_SESSION['pric'];

$total=$result*	$p;
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$idno=$_SESSION['idno'];
$country=$_SESSION['country'];
$city=$_SESSION['city'];
$phone=$_SESSION['phone'];
$roomid=$_SESSION['roomid'];
$room_no=$_SESSION['room_no'];
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
	<font color="blue">&nbsp;&nbsp;Your are ready for reserve!</font>
  <form  method="POST" action="payment.php">
  <br><br>
 <table valign='top' align="center" style="width:350px; height:250px;border-radius:10px;border:1px solid #686868">
<tr>
<td></td>
<td align="right"><a href="booking.php"><img src="image/close_icon.gif" title="Close"></a></td></tr>

<tr><td colspan="2" align="center">Payment Form</td></tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Name:</b></td><td><input type='text' name='bname' required></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Account Number:</b></td><td><input type='text' name='accountno' required></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Price:</b></td><td><input type='text' name='price' value="<?php echo $total?>" required></td>
</tr>
<tr>
<td>&nbsp;</td><td><input type='submit' name='submit' value="Finish" class="button_example" onClick="setDifference(this.form);"></td>
</tr> 
</table>

<input type="hidden" value="<?php echo $total ?>" name='total'/>
<input type="hidden" value="<?php echo $p ?>" name='p'/>
<input type="hidden" value="<?php echo $result ?>" name="result"/>
<input type="hidden" value="<?php echo $fname ?>" name="fname"/>
<input type="hidden" value="<?php echo $lname ?>" name="lname"/>
<input type="hidden" value="<?php echo $idno ?>" name="idno"/>
<input type="hidden" value="<?php echo $country ?>" name="country"/>
<input type="hidden" value="<?php echo $city ?>" name="city"/>
<input type="hidden" value="<?php echo $phone ?>" name="phone"/>
<input type="hidden" value="<?php echo $roomid ?>" name="room"/>
<input type="hidden" value="<?php echo $room_no ?>" name="roomno"/>

<input type="hidden" name="transfer" value="semayawi"/>

<?php

$x=1;
if(isset($_POST['submit'])){
	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$idno=$_POST['idno'];
$country=$_POST['country'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$price=$_POST['p'];
$duration=$_POST['result'];
$total=$_POST['total'];
$date=date("d/m/y");
$room_id=$_POST['room'];
$rom=$_POST['roomno'];



$amount=$_POST['price'];
$name=$_POST['bname'];
$accountno=$_POST['accountno'];
$tra=$_POST['transfer'];



$query = "SELECT * FROM bank where Account_no= '{$accountno}'AND Fname='{$name}';";
$result_set=mysql_query($query,$conn1);
$count=mysql_num_rows($result_set);
      if(!$result_set){
   die("query is failed".mysql_error());
}
if($count==0)
{
echo '<div align="center"><strong><font color="#FF0000">You Have No Account On This Branch!!!</font></Strong></div>';
}
else{

if(mysql_num_rows($result_set))
{

$result ="SELECT * FROM bank where Account_no= '{$accountno}'AND Fname='{$name}';";
$re=mysql_query($result,$conn1);

while($row = mysql_fetch_array($re))
  {
  if($row['Account_Balance']<=$amount){
   echo'<strong><font color="#FF0000">Your account balance is low</font></Strong>';
   
  }
  else{
  $value = mysql_query("UPDATE  bank set Account_Balance='{$row['Account_Balance']}'-'{$amount}' where Account_No= '{$accountno}';",$conn1);
  
  $sql=mysql_query("INSERT INTO reservation(fname,lname,idno,country,city,phone,price,duration,total,date,roomid,roomno)
VALUES
('$fname','$lname','$idno','$country','$city','$phone','$price','$duration','$total','$date','$room_id','$rom')");

  
    echo'<strong><font color="green">Successfully</font></Strong>';
if($x==1)  {
$query1 = "SELECT * FROM bank where Fname= '{$tra}';";
 $result_set=mysql_query($query1,$conn1);
      if(!$result_set){
   die("query is failed".mysql_error());
}
if(mysql_num_rows($result_set)>0)
{
$result1 = mysql_query("SELECT * FROM bank where Fname= '{$tra}';",$conn1);
while($row1 = mysql_fetch_array($result1))
  {
   $value = mysql_query("UPDATE  bank set Account_Balance='{$row1['Account_Balance']}'+'{$amount}' where Fname= '{$tra}';",$conn1);

   }
$value = mysql_query("UPDATE  rooms set status='reserved' where roomid= '{$room_id}';",$conn2);   	  
}}}}}	   
else
   {
     
	  echo'<strong><font color="#FF0000">Please Try Again!!</font></Strong>';
   }
   }
mysql_close($conn1);
mysql_close($conn2);
}
?>
</form>
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
