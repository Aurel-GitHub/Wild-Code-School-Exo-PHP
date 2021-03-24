<?php

require_once 'speedometer.php';

$km = 10;
$mile = 0.621;

echo 'Conversion ' . $km .' kilomètre(s) en mile(s)</br>';
echo Speedometer::convertKmToMiles($km) . '</br>';
echo 'Conversion ' . $mile . ' mile(s) en kilometre(s)</br>';
echo Speedometer::convertMileToKms($mile) . '</br>';