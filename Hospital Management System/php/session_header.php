<?php
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: ../drlogin.php?error=invalid_request');
	}
?>