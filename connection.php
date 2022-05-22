<?php
$hostname='localhost';
$username='root';
$password='';
try {
	$conn= new PDO("mysql:host=$hostname;dbname=safeways",$username,$password);
	if ($conn) {
		# code...
		echo "successful connected";
	}
}
catch(PDOException $e){
	echo $e->getMessage();

}