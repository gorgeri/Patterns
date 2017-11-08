<?php

spl_autoload_register(function($name){
    require_once 'classes/'.$name.'.php';
});
//
//$comms = new CommsManager(CommsManager::BLOGGS);
//$apptEncoder = $comms->getApptEncoder();
//echo $apptEncoder->encode();

/**
 * @var AppEncoder
 */
$comms = new CommsManager(CommsManager::MEGA);
$apptEncoder = $comms->getApptEncoder();
echo $apptEncoder->encode();