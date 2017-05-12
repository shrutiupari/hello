<?php
session_start();
include 'connect.php';
if($log != "log"){
	header ("Location: comments.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM comment WHERE id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'comments.php'</script>";
?>