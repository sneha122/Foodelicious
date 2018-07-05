<?php
include 'dbh.php';

			$Name= $_POST['name'];
			$DOB= $_POST['DOB'];
			$Email_ID= $_POST['emailid'];
			$Phone= $_POST['Phone'];
			$Username= $_POST['username'];
			$Password= $_POST['password'];
			
			$sql= "INSERT INTO users(name,username,password,DOB,emailid,phone) VALUES('$Name','$Username','$Password','$DOB','$Email_ID','$Phone')";
			$result =$conn->query($sql);
			
			header("Location:home.html");
?>
