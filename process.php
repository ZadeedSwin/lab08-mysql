<?php
	// process.php - checks the login details and starts a session
	session_start();

	// Capture the form data sent with POST
	$username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
	$password = isset($_POST["password"]) ? trim($_POST["password"]) : "";
	$token    = isset($_POST["token"]) ? $_POST["token"] : "";

	// Correct login: username = my name, password = my student ID
	if ($username == "Zadeed" && $password == "106382225") {
		$_SESSION["user"]  = $username;   // store the username in the session
		$_SESSION["token"] = $token;      // store the hidden field value too
		header("Location: welcome.php");
		exit();
	} else {
		// Wrong details - go back to the login page with an error
		header("Location: login.php?error=1");
		exit();
	}
?>
