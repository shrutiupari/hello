<?php
session_start();
include 'connect.php';
if($log != "log"){
	header ("Location: deleteaccount.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM register WHERE idno = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'deleteaccount.php'</script>";
?>