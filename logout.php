<?php
	// logout.php - ends the session and returns to the login page
	session_start();
	session_unset();
	session_destroy();
	header("Location: login.php");
	exit();
?>
