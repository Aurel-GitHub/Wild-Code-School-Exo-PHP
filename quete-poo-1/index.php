<?php

require './bicycle.php';
require './car.php';

$armstrongFCKDope = new Bicycle('red', 5);
echo 'Le vélo roule à : ' .$armstrongFCKDope->getCurrentSpeed(). ' km/h' .PHP_EOL;
$armstrongFCKDope->forward();
echo 'Le vélo roule après un coup de piquouse à : ' .$armstrongFCKDope->getCurrentSpeed(). ' km/h' .PHP_EOL;
$armstrongFCKDope->brake();
echo 'Après freinage le vélo roule à : '.$armstrongFCKDope->getCurrentSpeed().' km/h'.PHP_EOL;

$VirenqueDopéALInsuDeSonPleinGré = new Bicycle('blue',3);
echo 'Le vélo roule à : ' .$VirenqueDopéALInsuDeSonPleinGré->getCurrentSpeed(). ' km/h' .PHP_EOL;
$VirenqueDopéALInsuDeSonPleinGré->forward();
echo 'Le vélo roule après un coup de piquouse à : ' .$VirenqueDopéALInsuDeSonPleinGré->getCurrentSpeed(). ' km/h' .PHP_EOL;
$VirenqueDopéALInsuDeSonPleinGré->brake();
echo 'Après freinage le vélo roule à : '.$VirenqueDopéALInsuDeSonPleinGré->getCurrentSpeed().' km/h'.PHP_EOL;

$mclarenMercedesMp417 = new Car('black/white/grey',1, 'gasoline');
$mclarenMercedesMp417->start();
echo 'do not exceed  '.$mclarenMercedesMp417->getCurrentSpeed().' mph in the pits'.PHP_EOL; 
$mclarenMercedesMp417->forward();
echo 'After the last corner you are at '.$mclarenMercedesMp417->getCurrentSpeed().' mph'.PHP_EOL;
$mclarenMercedesMp417->brake();
echo 'Safety car Kimi, Safety car break in the P3'.$mclarenMercedesMp417->getCurrentSpeed().' mph'.PHP_EOL; 