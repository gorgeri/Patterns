<?php

class Preferences{
    private $props = array();
    private static $_instance;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance(){
        if(empty(self::$_instance)){
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function setProperty($key, $val){
        $this->props[$key] = $val;
    }

    public function getProperty($key){
        return $this->props[$key];
    }

}