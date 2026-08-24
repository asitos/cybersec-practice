<?php

echo "<h1>server time center</h1>";

$curr_date = date("Y-m-d H:i:s");
echo "<p>formatted date: $curr_date</p>"; // 2026-08-24 17:22:53

$timestamp = time();
echo "<p>raw timestamp: $timestamp</p>"; // raw unix timestamp (seconds since jan 1, 1970)

$future = strtotime("+1 week 2 days"); // converts string to raw timestamp
echo "<p>timestamp for next week: $future</p>";
