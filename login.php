<?php
	// login.php - login form (uses .php instead of .html so PHP include works)
	$pageTitle = "Login - Lab 08";
	include "header.inc";
?>
		<h2>Login</h2>

		<?php
			// Show an error message if process.php sent us back here
			if (isset($_GET["error"])) {
				echo "<p><strong>Invalid username or password. Please try again.</strong></p>";
			}
		?>

		<form method="post" action="process.php">
			<p>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required>
			</p>
			<p>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
			</p>
			<!-- Hidden field: user token = first initial + student ID -->
			<input type="hidden" name="token" value="Z106382225">
			<p>
				<input type="submit" value="Login">
			</p>
		</form>
<?php
	include "footer.inc";
?>
