<?php

spl_autoload_register(function($class_name){
    require_once 'classes/'.$class_name.'.php';
});


$megencoder = new MegaCommsManager();

echo $megencoder->getHeaderText();
echo $megencoder->getApptEncoder()->encode();
echo $megencoder->getFooterText();