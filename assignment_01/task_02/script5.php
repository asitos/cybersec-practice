<?php

function calc_area($width, $height)
{
  $area = $width * $height;
  return $area;
}

echo "<h1> room measurements </h1>";

$living_room = calc_area(10, 15);
$kitchen = calc_area(8, 12);

echo "<p>living room area: $living_room sq ft</p>";
echo "<p>kitchen area: $kitchen sq ft</p>";
