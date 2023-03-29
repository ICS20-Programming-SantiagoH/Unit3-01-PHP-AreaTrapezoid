<?php

// get the mesurements from the textfields
$sideA = $_POST['side_a'];
$sideB = $_POST['side_b'];
$height = $_POST['height'];

// calculate the area
$bothSides = $sideA + $sideB;
$allMesurements = $bothSides * $height;
$area = $allMesurements / 2;

echo "<h3>Results:</h3> The area of the trapezoid is " . round($area, 2) . "cm²"
?>