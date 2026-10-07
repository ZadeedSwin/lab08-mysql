# COS10026 – Week 08 Labs

This repo holds both Week 8 lab exercises. Clone it into the XAMPP `htdocs` folder as `lab08`.

## Lab 1 – Include files, hidden fields & Login Page with PHP

| File | Purpose |
|---|---|
| `login.php` | Login form (POST to `process.php`) with a hidden token field. Uses `.php` (not `.html`) so it can `include` the header and footer. |
| `process.php` | Starts the session, checks the username/password from `$_POST`, sets `$_SESSION['user']`, redirects to `welcome.php` or back to `login.php?error=1`. |
| `welcome.php` | Checks `$_SESSION['user']`; shows a personalised welcome or redirects to the login page. |
| `logout.php` | Ends the session and returns to the login page. |
| `header.inc` / `footer.inc` | Shared page header (doctype, head, title) and footer (copyright), added with `include`. |

Open http://localhost/lab08/login.php. Log in with username `Zadeed` and student ID as the password.

## Lab 1 – MySQL Database

| File | Purpose |
|---|---|
| `create_blog_site.sql` | SQL that builds the `blog_site` database (`users` and `posts` tables) with sample data |
| `blog_site.sql` | Database export from phpMyAdmin |
| `blog.php` / `settings.php` | Optional page that displays both tables from MySQL |
