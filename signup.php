<?php
include_once('connection.php');
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$post=$_POST['post'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
    $email=$_POST['email'];
}
$sql = $conn-> exec("INSERT INTO  users values('$username','$post','$password','$cpassword','$email')")OR die("not executed");
if($sql){
	 echo"<br><font color=green>account successfully created</font>";
	 echo "<a href='index.php'>LOGIN TO CONTINUE</a>";
}
?>