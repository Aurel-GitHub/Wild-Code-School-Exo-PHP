<?php


$weapons = ['fists', 'whip', 'gun'];
$ennemyWeapon = $weapons[rand(0,2)];

echo "Arme de l'opposant: ".$ennemyWeapon. '  || ';

if ($ennemyWeapon == 'fists')
{
    $indyWeapon = 'gun';
    echo "Arme d'Indiana Jones: ".$indyWeapon
    ;
}
elseif ($ennemyWeapon == "whip")
{
    $indyWeapon = 'fists';
    echo "Arme d'Indiana Jones: ".$indyWeapon;
}
else
{
    $indyWeapon = 'whip';
    echo "Arme d'Indiana Jones: ".$indyWeapon;
}