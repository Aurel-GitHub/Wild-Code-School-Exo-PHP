/////////////////
// Main program 
/////////////////

<?php

include '../src/function.php' ;

/**Exo function */
// echo sayHello();

/**Exo Paramètre */
// echo sayHello();

/**Exo fin */
 echo whoAmI("Yoda",$watchmen);
 
 
 /////////////////
// Function part 
/////////////////

/**
 * Exo Parametre
 */
// function sayHello($name = "Dr. Manhattan"): string
// {
//         return 'Hello '.$name;   
// }


/**
 * Exo fin
 */

$watchmen = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'];

function whoAmI( string $name, array $watchmen): string
{
    if(in_array($name,$watchmen)){
        return $name. ' est un watchmen';
    }else{
        return $name. ' est un intrus';
    }
}