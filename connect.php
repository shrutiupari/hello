<?php
define("db_server","localhost");
define("db_user","root");
define("db_pass","");
define("db_name","hotel");
$conn=mysql_connect(db_server,db_user,db_pass);//create connection
if(!$conn)
{
die("error connection to db server".mysql_error());
}
$db_select=mysql_select_db(db_name,$conn);//to select from the db
if(!$db_select){
die("error in selection db".mysql_error());
}
?>