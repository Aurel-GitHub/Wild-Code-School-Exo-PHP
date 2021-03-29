<?php

$presentTime = new DateTime('now');
echo $presentTime->format('m-d-Y H:i');
echo '<br>';
$destinationTime = new DateTime('2555-03-16 10:25');
echo $destinationTime->format('m-d-Y H:i');
echo '<br>';
$interval = $presentTime->diff($destinationTime);   
echo $interval->format('Il y a %Y années, %M mois, %D jours, %H heures, %I minutes et %S secondes de différences');
echo '<br>';


echo '::::::::::::::BONUS:::::::::::::::::';
echo '<br>';
$minutes = $interval->format('%I');
$heures = $interval->format('%H');
$jours = $interval->format('%D');
$mois = $interval->format('%M');
$annes = $interval->format('%Y');

$resultatsHeures = $heures * 60;
$resultatJours = $jours * 1440;
$resultatMois = $mois * 43200;
$resultatAnnee = $annes * 525600;
$resultat = $resultatsHeures + $resultatJours + $resultatMois + $resultatAnnee;
$nombreDeLitre  = $resultat / 10000;
echo ' il y a '.$resultat. ' minutes entre les deux dates et le réservoir à besoin de '. $nombreDeLitre .' litres';
