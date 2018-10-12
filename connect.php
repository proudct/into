<?php 
$host = "localhost";
$user = "root";
$pwd = "";
$db ="into";

$con = mysqli_connect($host,$user,$pwd,$db) or die("Error" . mysqli_errno($con));
mysqli_query($con,"SET NAMES'utf8' ");
?>