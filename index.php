<?php

$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";
$maReponse = "Réponse => ";
echo $maReponse;


$lenght = strlen($message1)/2; 
$chaine = substr($message1, 5, $lenght);
$remplace = str_replace("@#?", ' ', $chaine);
echo  strrev ($remplace), ' ';

$lenght = strlen($message2)/2;
$chaine = substr($message2, 5, $lenght);
$remplace = str_replace("@#?", ' ', $chaine);
echo  strrev ($remplace), ' ' ;


$lenght = strlen($message3)/2;
$chaine = substr($message3, 5, $lenght);
$remplace = str_replace("@#?", ' ', $chaine);
echo strrev ($remplace);

