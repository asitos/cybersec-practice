```bash
sudo mysql -u root

CREATE DATABASE cybersec_db;
USE cybersec_db;
CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), password VARCHAR(50));
INSERT INTO users (username, password) VALUES ('admin', 'hacker123');
INSERT INTO users (username, password) VALUES ('user', 'pass');
exit
```


# Database Connection Troubleshooting Log

## Error Encountered
`500 Internal Server Error` when attempting to load `db_connect.php`.

## Root Cause Analysis
1. **PHP Extension Missing:** The Arch Linux PHP configuration (`php.ini`) has the `mysqli` extension disabled by default. This caused PHP to crash when encountering `new mysqli()`.
2. **Access Denied:** After enabling `mysqli`, PHP crashed with `Uncaught mysqli_sql_exception: Access denied for user 'root'@'localhost'`. Because PHP 8 throws exceptions on connection failures instead of just returning false, this unhandled exception resulted in a 500 error.
3. **MariaDB Socket Authentication:** Modern MariaDB uses the `auth_socket` plugin for the root user. This means you can only authenticate as `root` in the database if your Linux OS user is also `root` (e.g., using `sudo`). Since Apache runs PHP scripts as the `http` user, MariaDB rejected the connection.

## The Fix
Created a dedicated standard user for the web application:
```bash
sudo mysql -u root -e "CREATE USER 'secuser'@'localhost' IDENTIFIED BY 'secpass'; GRANT ALL PRIVILEGES ON cybersec_db.* TO 'secuser'@'localhost'; FLUSH PRIVILEGES;"
```

Updated `db_connect.php` to use the new credentials:
```php
$servername = "localhost";
$username = "secuser";
$password = "secpass";
$dbname = "cybersec_db";

$conn = new mysqli($servername, $username, $password, $dbname);
```
