<html>
<body>
<form action="" method="POST">
<input type="text" name="date"/>
<input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['submit'])){
$date1=date("d/m/Y");
$date2=$_POST['date'];
$total=$date2-$date1;
echo"The Difference Is".$total;
}
?>
</body></html>
