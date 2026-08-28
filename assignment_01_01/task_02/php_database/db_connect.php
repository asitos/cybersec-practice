<?php
// database credentials
$servername = "localhost";
$username = "secuser";
$password = "secpass"; // mariaDB root has no password by default on Arch
$dbname = "cybersec_db";

// attempt to connect using the mysqli object
$conn = new mysqli($servername, $username, $password, $dbname);

// check if the connection failed
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "<h1 style='color: green;'>Successfully connected to the MariaDB
  Database!</h1>";

// always close the connection when you are done
$conn->close();
