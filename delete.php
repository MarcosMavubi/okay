<?php

include("connection.php");


 $fn=$_GET['fn'];


$sql = "DELETE FROM reserved WHERE fn='$fn'";
$query = $conn->exec($sql);

header("Location:view.php");
?>