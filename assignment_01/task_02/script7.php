<?php

// associative arrays (like dictionaries?)

$profile = array(
  "username" => "h4x0r_99",
  "level" => 42,
  "email" => "hax@example.com",
  "is_banned" => false
);

echo "<h1>user profile info</h1>";

echo "<p>user: " . $profile["username"] . "</p>";
echo "<p>contact: " . $profile["email"] . "</p>";
echo "<p>level: " . $profile["level"] . "</p>";
