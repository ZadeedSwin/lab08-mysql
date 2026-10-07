# COS10026 – Week 08 Lab Exercise 1: MySQL Database

Basic MySQL database `blog_site` with two related tables, built in phpMyAdmin (XAMPP).

## Tables

**users**

| Field | Type | Notes |
|---|---|---|
| user_id | INT | Primary key, auto increment |
| username | VARCHAR(50) | |
| email | VARCHAR(100) | |
| is_active | BOOLEAN | Stored as TINYINT(1): true = 1, false = 0 |

**posts**

| Field | Type | Notes |
|---|---|---|
| post_id | INT | Primary key, auto increment |
| user_id | INT | Foreign key → users.user_id |
| title | VARCHAR(100) | |
| content | TEXT | |

## Files

- `create_blog_site.sql` – the SQL used to create the database, tables and sample data
- `blog_site.sql` – the database exported from phpMyAdmin (Export → SQL)
- `blog.php` / `settings.php` – optional page that displays both tables from MySQL

## How to import

1. Start Apache and MySQL in XAMPP and open http://localhost/phpmyadmin
2. Click **Import**, choose `blog_site.sql`, then click **Import** (or run `create_blog_site.sql` in the **SQL** tab)
3. The `blog_site` database appears with 3 users and 3 posts
