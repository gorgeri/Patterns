<?php

class CommsManager
{
    const BLOGGS = 1;
    const MEGA   = 2;
    const XML    = 3;
    private $mode = 1;

    public function __construct($mode){
        $this->mode = $mode;
    }

    public function getApptEncoder(){

        switch($this->mode){

            case self::MEGA:
                return new MegaApptEncoder(); break;
            case self::XML:
                return new XMLApptExcoder(); break;
            default:
                return new BloggsApptEncoder(); break;

        }

    }

}
