<?php

use App\Wcs\Hello;

require './vendor/autoload.php';
require './Wcs/hello.php';


$test = new Hello();
echo $test->talk();