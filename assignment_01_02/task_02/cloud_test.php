<?php
require_once 'config.php';

$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error) {
  die("cloud connection failed: " . $conn->connect_error);
}

echo "<h1>successfully connected to the cloud database!</h1>";
