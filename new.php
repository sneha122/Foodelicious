<?php
include 'dbh.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username']=$username;

$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result= $conn->query($sql);

if(!$row = $result->fetch_assoc()){
	echo "Your username or password is incorrect";
}else{
	header("Location:home.html");
}
?> 