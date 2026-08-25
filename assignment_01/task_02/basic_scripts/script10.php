<?php

// superglobals
echo "<h1>server & client details</h1>";

$user_ip = $_SERVER['REMOTE_ADDR'];
echo "<p>your IP address is: <strong>$user_ip</strong></p>";

$server_software = $_SERVER['SERVER_SOFTWARE'];
echo "<p>server powered by: <strong>$server_software</strong></p>";

$curr_script = $_SERVER['PHP_SELF'];
echo "<p>you are running: <strong>$curr_script</strong></p>";
