<?php
include_once('connection.php');
if(isset($_POST['submit'])){
	$fn=$_POST['fn'];
	$pn=$_POST['pn'];
	$ff=$_POST['ff'];
	$ft=$_POST['ft'];
    $dp=$_POST['dp'];
	$rt=$_POST['rt'];
	$ad=$_POST['ad'];
	$cd=$_POST['cd'];
    $tc=$_POST['tc'];
}
$sql = $conn-> exec("INSERT INTO  reserved values('$fn','$pn','$ff','$ft','$dp','$rt','$ad','$cd','$tc')")OR die("not executed");
if($sql){
	 echo"<br><font color=green>successfully inserted</font>";
	 echo "<a href='book.php'>back</a>";
}
?>
