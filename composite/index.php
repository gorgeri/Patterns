<?php

spl_autoload_register(function($class_name){
    require_once 'classes/'.$class_name.'.php';
});

$archer = new Archer();
$archer->bombardStrength();
$laser = new LaserCannonUnit();
$laser->bombardStrength();

$army = new Army();

$army->addUnit($archer);
$army->addUnit($laser);



$archer2 = new Archer();
$laser2 = new LaserCannonUnit();

$army2 = new Army();
$army2->addUnit($archer2);
$army2->addUnit($laser2);

$army2->addUnit($army);
echo $army2->bombardStrength();