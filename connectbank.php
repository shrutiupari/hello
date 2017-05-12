<?php
$conn1=mysql_connect('localhost','root',"");
mysql_select_db("bank",$conn1);

$conn2=mysql_connect('localhost','root',"",true);
mysql_select_db("hotel",$conn2);
?>