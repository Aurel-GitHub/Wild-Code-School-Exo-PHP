<?php
require './Bicycle.php';
require './Car.php';

$vtt = new Bicycle();
$vtt->setColor('red');
$vtt->forward(25);
$vtt->setEnergy(10);
$vtt->setEnergyLevel(35);
$vtt->setNbSeats(1);

$vtt->forward(9999);
$vtt->brake();

var_dump($vtt);