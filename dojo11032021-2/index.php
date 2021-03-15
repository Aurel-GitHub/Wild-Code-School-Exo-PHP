<?php
/*
À partir d'un tableau $users contenant une série de prénoms, afficher selon le nombre de prenoms (0,1,2 ou >2), les phrase type correspondantes :
"Soyez le premier à aimer cette publication",
"Simon aime cette publication",
"Simon et Arthur aiment cette publication",
"Simon et X autres personnes ont aimé cette publication.",
*/

$users = ["Julie", "Lea", "Jhon", "Arthur"];

// show the correct message depending the number of users
function message(array $users)
{
    //number of users
    $countUsers = count($users);

    // all users -1 (int)
    $otherUsers = $countUsers - 1;

    if ($countUsers == 0) {
        //if there are no users return this message
        return "Soyez le premier à aimer cette publication";
    } elseif ($countUsers == 1) {
        //if there is 1 user return this message
        return "$users[0] aime cette publication";
    } elseif ($countUsers == 2) {
        //if there are 2 users return this message
        return "$users[0] et $users[1] aiment cette publication";
    } else {
        //if there are 3 or more users return a random user and this message
        $randomUser = array_rand($users, 1);
        return "$users[$randomUser] et $otherUsers autres personnes ont aimé cette publication.";
    }
}

echo message($users);