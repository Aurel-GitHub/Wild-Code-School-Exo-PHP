<?php

///// EXO I /////
function repeat_str($number, $word){
    echo str_repeat($word, $number);
}
repeat_str(5, 'Salut ');

///////////////////////////////////

////// EXO II //////

function geetII($name){
    if($name == 'Johnny'){
        echo 'Hello, my love!';
    }else{
        echo 'Hello '.$name;
    }
}

geetII('jean');



