<?php
	// welcome.php - only shown to users who have logged in
	session_start();

	// If there is no logged-in user, send them back to the login page
	if (!isset($_SESSION["user"])) {
		header("Location: login.php");
		exit();
	}

	$pageTitle = "Welcome - Lab 08";
	include "header.inc";
?>
		<h2>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h2>
		<p>You have logged in successfully.</p>
		<p>Your user token (from the hidden field) is:
			<strong><?php echo htmlspecialchars($_SESSION["token"]); ?></strong></p>
		<p><a href="logout.php">Log out</a></p>
<?php
	include "footer.inc";
?>
