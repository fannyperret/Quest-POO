<?php

require 'User.php';

use fanny\User;
$user = new User();
$user->setLastName("Lolita")
        ->setFirstName("LEMPICKA")
        ->setAddress("1000 Rue des Etoiles")
        ->setBirthDay("");
        
$date = new DateTime('1999-01-02');
$user->setAddress("20 Square des Constellations");
$datetime1 = $date;
$datetime2 = new DateTime("now");
$between = date_diff($datetime1, $datetime2);

echo $user->getLastName() .PHP_EOL;
echo $user->getFirstName() .PHP_EOL;
echo $user->getAddress() .PHP_EOL;
echo $date->format('Y-m-d') .PHP_EOL;
echo $between->format('%y years') . PHP_EOL;
