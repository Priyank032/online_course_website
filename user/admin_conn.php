<?php
//make connection with server
$servername="localhost";
$username="root";
$password="";
$db="CPCT_DB";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	die("connection failed");
}
?>
