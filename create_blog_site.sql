-- COS10026 Week 08 Lab Exercise 1 - MySQL Database
-- Author: Zadeed Haque
-- Run this in the phpMyAdmin SQL tab to build the blog_site database from scratch.

CREATE DATABASE IF NOT EXISTS blog_site;
USE blog_site;

-- users: one row per blog member
CREATE TABLE users (
    user_id   INT AUTO_INCREMENT PRIMARY KEY,
    username  VARCHAR(50)  NOT NULL,
    email     VARCHAR(100) NOT NULL,
    is_active BOOLEAN      NOT NULL DEFAULT TRUE  -- stored as 1 (true) / 0 (false)
);

-- posts: each post belongs to a user through user_id
CREATE TABLE posts (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT          NOT NULL,
    title   VARCHAR(100) NOT NULL,
    content TEXT         NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Sample data (at least 2 records per table)
INSERT INTO users (username, email, is_active) VALUES ('alex', 'alex@email.com', true);
INSERT INTO users (username, email, is_active) VALUES ('mia', 'mia@email.com', false);
INSERT INTO users (username, email, is_active) VALUES ('zadeed', 'zadeed@email.com', true);

INSERT INTO posts (user_id, title, content) VALUES (1, 'First Post', 'This is my first blog post.');
INSERT INTO posts (user_id, title, content) VALUES (2, 'Hello World', 'Mia is testing her first post.');
INSERT INTO posts (user_id, title, content) VALUES (3, 'Learning MySQL', 'Creating tables with INT, VARCHAR, BOOLEAN and TEXT data types in phpMyAdmin.');

-- Check the results
SELECT * FROM users;
SELECT * FROM posts;
