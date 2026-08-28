<?php

// math functions
echo "<h1>math & randomness</h1>";

$number = 144;

echo "<p>square root of $number is " . sqrt($number) . "</p>";

$lucky_num = rand(1, 100);
echo "<p>random lucky number(1-100) is $lucky_num</p>";

$decimal = 3.14159;
echo "<p>pi ($decimal) rounded is " . round($decimal) . "</p>";
