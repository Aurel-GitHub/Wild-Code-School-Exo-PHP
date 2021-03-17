<?php

require_once 'fighter.php';


echo "### Heracles 🧔### ".PHP_EOL;
$heracles = new Fighter('🧔 Héracles',20,6);
echo $heracles->getName().' a : '.$heracles->getLife().' points de vie'.PHP_EOL;
echo '-------------------------'.PHP_EOL;

echo "### Lion de Némée 🦁### ".PHP_EOL;
$lionDeNeme = new Fighter('🦁 Lion de Némée', 11, 13);
echo $lionDeNeme->getName().' a : '.$lionDeNeme->getLife().' points de vie'.PHP_EOL;
echo '-------------------------'.PHP_EOL;

echo "### Heracles 🧔 VS Lion de Némée 🦁### ".PHP_EOL;
$heracles->fight($lionDeNeme);
// $heracles->fight($lionDeNeme);
// $heracles->fight($lionDeNeme);
// $heracles->fight($lionDeNeme);
// $heracles->fight($lionDeNeme);
// $heracles->fight($lionDeNeme);
// $heracles->fight($lionDeNeme);
// $heracles->fight($lionDeNeme);

echo  $lionDeNeme->getName().' c\'est pris une grosse calotte de ces morts par '.$heracles->getName().' il lui reste donc '.$lionDeNeme->getLife().' points de vie';


