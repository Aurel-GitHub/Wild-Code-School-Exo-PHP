<?php

require './bicycle2.php';
require './car2.php';
require './truck2.php';

echo '###Velo###'.PHP_EOL;
$bicycle = new Bicycle2('bleu', 1);
echo 'Je n\'avance pas normal je suis à :  '.$bicycle->getCurrentSpeed().' km/h'.PHP_EOL;
echo $bicycle->forward().PHP_EOL;
echo 'je roule à : ' .$bicycle->getCurrentSpeed().' km/h'.PHP_EOL;
echo $bicycle->brake().' je suis maitenant à '. $bicycle->getCurrentSpeed().' km/h'.PHP_EOL;
echo '-----------------------------------------------------------------------------'.PHP_EOL;

echo '###Voiture###'.PHP_EOL;
$car = new Car2('red',4, 'electrique');
echo 'Je n\'avance pas normal je suis à :  '.$car->getCurrentSpeed().' km/h'.PHP_EOL;
echo $car->start().PHP_EOL;
$car->setCurrentSpeed(100);
$car->forward();
echo 'je roule à : ' .$car->getCurrentSpeed().' km/h'.PHP_EOL;
echo $car->brake().' je suis maitenant à '. $car->getCurrentSpeed().' km/h'.PHP_EOL;
echo '-----------------------------------------------------------------------------'.PHP_EOL;

echo '###Camion###'.PHP_EOL;
$truck = new Truck2('grey',3,'fuel',100 );
echo 'Je n\'avance pas normal je suis à :  '.$truck->getCurrentSpeed().' km/h'.PHP_EOL;
echo 'Mon camion possède une capacité de : '.$truck->getCapacity().PHP_EOL;
echo $truck->start().PHP_EOL;
$truck->setCurrentSpeed(50);
$truck->forward();
echo 'je roule à : ' .$truck->getCurrentSpeed().' km/h'.PHP_EOL;
echo $truck->brake().' je suis maitenant à '. $car->getCurrentSpeed().' km/h'.PHP_EOL;
$truck->setCurrentCharge(75);
echo ' Mon camion possède actuellement : '.$truck->getCurrentCharge().' cartons'.PHP_EOL;
echo  $truck->truckLoading().PHP_EOL;
echo ' Je rajoute encore '. $truck->setCurrentCharge(300).' cartons';
echo $truck->truckLoading().PHP_EOL;

/**
 * 
 * 
 * RESULTAT:
 * 
 * ➜  quete-poo-2 git:(main) ✗ php index2.php
###Velo###
Je n'avance pas normal je suis à :  0 km/h
Go !
je roule à : 15 km/h
Je freine !
Je freine !
Je freine !
Maintenant je suis à l'arrêt je suis maitenant à 0 km/h
-----------------------------------------------------------------------------
###Voiture###
Je n'avance pas normal je suis à :  0 km/h
Moteur allumé !
je roule à : 115 km/h
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Maintenant je suis à l'arrêt je suis maitenant à 0 km/h
-----------------------------------------------------------------------------
###Camion###
Je n'avance pas normal je suis à :  0 km/h
Mon camion possède une capacité de : 100
Moteur allumé !
je roule à : 65 km/h
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Je freine !
Maintenant je suis à l'arrêt je suis maitenant à 0 km/h
 Mon camion possède actuellement : 75 cartons
In feeling
 Je rajoute encore  cartonsIs full
 */






