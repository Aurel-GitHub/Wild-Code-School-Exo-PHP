<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

require './vendor/autoload.php';
require './Wcs/hello.php';


$test = new Hello();
echo $test->talk();

$test2 = new SayHello();
echo $test2->world();