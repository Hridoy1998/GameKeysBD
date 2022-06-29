<?php 
	session_start();
	if(!isset($_COOKIE['buyer'])){ 
		header('location: ../views/Login.php');
	}
	
?>