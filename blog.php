<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="COS10026 Week 08 - display blog_site database tables" />
	<meta name="author" content="Zadeed Haque" />
	<title>Week 08 - blog_site Database</title>
	<style>
		body  { font-family: Arial, sans-serif; margin: 2em; }
		table { border-collapse: collapse; margin-bottom: 2em; }
		th, td { border: 1px solid #999; padding: 6px 12px; text-align: left; }
		th { background: #ddd; }
	</style>
</head>
<body>
	<h1>blog_site Database</h1>
<?php
	/*
		Displays the users and posts tables from the blog_site database.
		Based on the unit's PHP - MySQL SELECT template.
	*/
	require_once "settings.php";                              // Load MySQL log in details
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);     // Log in and use database

	if ($conn) {
		// ---------- users table ----------
		echo "<h2>Users</h2>";
		$result = mysqli_query($conn, "SELECT * FROM users");
		if ($result && $result->num_rows > 0) {
			echo "<table>
				<tr><th>User ID</th><th>Username</th><th>Email</th><th>Active</th></tr>";
			while ($row = $result->fetch_assoc()) {
				// is_active is stored as 1 or 0, so show Yes or No instead
				$active = $row["is_active"] ? "Yes" : "No";
				echo "<tr>
					<td>" . $row["user_id"] . "</td>
					<td>" . htmlspecialchars($row["username"]) . "</td>
					<td>" . htmlspecialchars($row["email"]) . "</td>
					<td>" . $active . "</td>
				</tr>";
			}
			echo "</table>";
		} else {
			echo "<p>0 results</p>";
		}

		// ---------- posts table (joined with users to show the author) ----------
		echo "<h2>Posts</h2>";
		$query = "SELECT posts.post_id, users.username, posts.title, posts.content
		          FROM posts JOIN users ON posts.user_id = users.user_id";
		$result = mysqli_query($conn, $query);
		if ($result && $result->num_rows > 0) {
			echo "<table>
				<tr><th>Post ID</th><th>Author</th><th>Title</th><th>Content</th></tr>";
			while ($row = $result->fetch_assoc()) {
				echo "<tr>
					<td>" . $row["post_id"] . "</td>
					<td>" . htmlspecialchars($row["username"]) . "</td>
					<td>" . htmlspecialchars($row["title"]) . "</td>
					<td>" . htmlspecialchars($row["content"]) . "</td>
				</tr>";
			}
			echo "</table>";
		} else {
			echo "<p>0 results</p>";
		}

		mysqli_close($conn);                                  // Close the database connection
	} else {
		echo "<p>Unable to connect to the database.</p>";
	}
?>
</body>
</html>
