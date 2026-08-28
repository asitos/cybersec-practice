<?php

// while loop

echo "<h1>countdown system</h1>";
$system_health = 100;

while ($system_health > 0) {
  echo "health at $system_health% - systems normal<br>";

  $system_health -= 25;
}

echo "<h2>system offline</h2>";
?>
