<?php

require_once 'Preferences.php';
/**
 * @var Preferences
 */

$propery_box = Preferences::getInstance();

$propery_box->setProperty('host', 'localhost');
$propery_box->setProperty('user', 'root');
$propery_box->setProperty('database', 'shop');
$propery_box->setProperty('password', '');

//
$propery_box2 = Preferences::getInstance();
echo $propery_box2->getProperty('host');