<?php
	session_start();
	include 'koneksi.php';

	$username = $_POST['user'];
	$password = $_POST['password'];

	$login = mysqli_query($conn, "select * from loginn where user_name= '$username' and password = '$password' ");
				 
	$row = mysqli_fetch_assoc($login);
	if ($row ['user_name'] == $username && $row ['password'] == $password){
		header("location:index.php");
	}else{
		echo "failed login";
	}

?>