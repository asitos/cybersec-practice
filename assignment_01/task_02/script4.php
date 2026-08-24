<?php

// arrays

$users = array("admin", "root", "guest", "test_user");

echo "<h1>registered users:</h1>";
echo "<ul>";

foreach ($users as $name) {
  echo "<li>user: $name</li>";
}

echo "</ul>";
?>
