<?php

spl_autoload_register(function($class_name){
    require_once 'classes/'.$class_name.'.php';
});

$fileStrategy = new FileStrategy();
echo $fileStrategy->getLink('some-file');