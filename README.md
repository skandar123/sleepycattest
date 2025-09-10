# 🐱 SleepyCat Website

### 📌 Overview

This project is a PHP + MySQL web application that implements a basic authentication system. It allows users to:

* Register with an email and password
* Log in securely with session handling
* Stay logged in with a “Remember Me” option
* Log out safely
* See a personalized home page after login

### 🏗️ Features

* ✅ User Registration

* ✅ User Login (with validation)

* ✅ Session Management (session.php)

* ✅ Remember Me functionality (auto-logout after inactivity)

* ✅ Logout support

* ✅ Styled pages using formstyle.css

### ⚙️ Technologies Used

1. PHP 7+
2. MySQL (Database: sleepycat)
3. HTML5, CSS3

### 📂 Project Structure

    project-root/
    │── index.php         # Home page (after login)
    │── login.php         # User login form
    │── logout.php        # Logout functionality
    │── register.php      # Registration form
    │── welcome.php       # Registration processing + success message
    │── config.php        # DB connection
    │── session.php       # Session handling & authentication check
    │── formstyle.css     # Styling for forms & navigation
    │── sleepycat.png     # Logo/branding image

### 🗄️ Database Setup

Create a MySQL database named sleepycat:


    CREATE DATABASE sleepycat;


Create a users table:


    CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
    );

### ▶️ Running the Application

Clone or copy the project into your PHP server’s root directory (e.g., htdocs/ for XAMPP or www/ for WAMP).

Start Apache and MySQL.

Import the sleepycat database and users table as described above.

Update database credentials in config.php if necessary:

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sleepycat";

Open in browser:

    http://localhost/<project-folder>/login.php

### 🔐 Default Workflow

1. Register at register.php


2. Login with email + password at login.php

* Optionally select Remember Me to stay logged in

3. Redirected to Home (index.php) with success message and logged-in user shown in navbar


4. Logout anytime via logout.php

### 🚀 Future Improvements

* Use password hashing (password_hash / password_verify) instead of plain text storage

* Add email verification

* Add profile management (update password, delete account)

* Improve UI with modern CSS/Bootstrap

### 👩‍💻 Author

Sayantika Kandar