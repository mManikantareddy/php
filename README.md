Features

➕ Add new users

📋 View all users

✏️ Update user details

❌ Delete users

🎨 Clean and responsive design using Bootstrap 5

🛠️ Tech Stack

PHP (Core PHP – Procedural)

MySQL

Bootstrap 5

HTML / CSS

🚀 Installation & Setup

Clone this repository

git clone https://github.com/Manikantareddy/php-crud-app.git
cd php-crud-app


Create the database

Open phpMyAdmin

Create a new database (e.g., crud_demo)

Import the crud_demo.sql file (included in repo)

Configure Database
Update your config.php file with your MySQL credentials:

<?php
$conn = mysqli_connect("localhost", "root", "", "crud_demo");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>


Run the project
Start your XAMPP/WAMP server and open in browser:

http://localhost/php-crud-app/display.php

📂 Folder Structure
php-crud-app/
│-- config.php        # Database connection
│-- user.php          # Add user
│-- display.php       # Show all users
│-- update.php        # Update user
│-- delete.php        # Delete user
│-- crud_demo.sql     # Database file

📸 Screenshot

(Add a screenshot of your application here)
