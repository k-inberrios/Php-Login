# Php-Login

This code provides a simple login using PHP and MySql. The code allows you to register, sign in and reset your password. It also includes basic validation steps such as checking the username is not taken when you create an account. Is important to note for security the password for each user has been hashed.

To implement this is important to create the following database:
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


Then, make sure to modify the config.php file with the correct server settings.  
