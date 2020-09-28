<?php

session_start();

if (isset($_SESSION ['user'])) 
{
	$a=$_SESSION['user'];
	session_destroy();
	unset($_SESSION['user']);
	header('location:login.php');
	echo "<script>alert('Password Updated');</script>";
}
else
 {
	header('location:login.php');
	
}

?>