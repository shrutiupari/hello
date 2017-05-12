<?php
session_start();
include 'connect.php';
if($log != "log"){
	header ("Location: deleteroom.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM rooms WHERE roomid = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'deleteroom.php'</script>";
?>