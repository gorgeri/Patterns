<?php

class ZipFile extends FileNamingStrategy
{

    function createLinkName($filename){
        return self::BASE_URL.$filename.'.zip';
    }

}