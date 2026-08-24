<?php

// if/else

$user_role = "guest";

if ($user_role == "admin") {
  echo "<p style='color: green;'>access granted</p>";
} else if ($user_role == "moderator") {
  echo "<p style='color: orange;'>access limited</p>";
} else {
  echo "<p style='color: red;'>access denied</p>";
}
