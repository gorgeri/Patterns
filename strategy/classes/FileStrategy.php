<?php

class FileStrategy
{
    protected $_type;

    function __construct(){

        if(strstr($_SERVER["HTTP_USER_AGENT"], "win")){
            $this->_type = new ZipFile();
        } else{
            $this->_type = new TarFile();
    }

    }


    public function getLink($file){
        return $this->_type->createLinkName($file);
    }


}