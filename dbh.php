<?php
$conn= mysqli_connect("localhost","root","","foodelicious");
if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
?>