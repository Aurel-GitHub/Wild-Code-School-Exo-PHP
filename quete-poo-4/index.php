<?php

require_once './quete-poo-4/car2.php';

$renault = new Car2('blue', 4, 'fuel');


try{
    echo $renault->start() . '</br>';
}
catch (Exception $e)
{
    echo $e->getMessage() . '</br>';
    echo $renault->setParkBrake() . '</br>';
}
finally
{
    echo "La voiture est actuellement en route.PHP_EOL";
}

echo $renault->setParkBrake();

try{
    echo $renault->start() . '</br>';
}
catch (Exception $e)
{
    echo 'Erreur: ' . $e->getMessage() . '</br>';
    echo $renault->setParkBrake() . '</br>';
}
finally
{
    echo "La voiture est actuellement en route.PHP_EOL";
}